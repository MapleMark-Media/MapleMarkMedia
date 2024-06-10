<?php 

namespace awr\models;

use awr\models\CommonModel;
use awr\models\FullReseterModel;

class SnapshotModel {
	
	/* For Singleton Pattern */
	private static $_instance = null;
 	public function __construct() {  
   	}
 
   	public static function get_instance() {
 
		if(is_null(self::$_instance)) {
			self::$_instance = new SnapshotModel ();  
		}

		return self::$_instance;
	}

    public function create ( $params = array() ) {

        global $wp_version;

        $snapshot_data = array();

        $id = uniqid(); //$this->generate_snapshot_uid();

        if (!$id) {
            throw new \Exception('Unable to generate a valid snapshot UID.');
        }

        $snapshot_data['id'] = $id;
        $snapshot_data['name'] = substr(trim($params['name']), 0, 512);
        //$snapshot_data['timestamp'] = current_time('mysql');
        $snapshot_data['time'] = time();
        $snapshot_data['wp_version'] = $wp_version;

        //$snapshot_data['tbl_names'] = array();

        $options = array();

        $this->copy_tables ( $snapshot_data, $options );

        $snapshot = array ( 'id' =>  $id, 'data' => $snapshot_data);
        
        $this->save_snapshot($snapshot);

        return 1;
        
    }

	private function create_file ( $file )
    {
        $path = trailingslashit(WP_CONTENT_DIR);
        $url = trailingslashit(WP_CONTENT_URL);
        if (!empty($file)) {
            $path = $path . $file;
            $url = $url . $file;
        }

        return array ('path' => $path, 'url' => $url);
    }

    private function is_snapshot_file_exist ( $file )
    {
        $path = trailingslashit(WP_CONTENT_DIR) . $file;
        return file_exists($path);
    }

    /**
     * return an array ('path' => ..., 'url' => ...)
     */
	public function export ( $id ){
        
        global $wpdb;

        if ( !$id )
            return '';

        $uid = $id;

        $file_name = 'snapshot-' . $uid . '.sql';

        $download_sql_file = $this->create_file( $file_name );
        
        if (is_wp_error($download_sql_file)) {
            return $download_sql_file;
        }
        
        $credentials = array(
            'host' => $wpdb->dbhost,
            'username' => $wpdb->dbuser,
            'password' => $wpdb->dbpassword,
            'db_name' =>  $wpdb->dbname,
        );

        $dumper = \Shuttle_Dumper::create( $credentials );

        $dumper->dump($download_sql_file['path'], $uid);

        return $download_sql_file;
    }

    public function compare_current_to ( $snapshot_id ) {

        global $wpdb;

        $current = $snapshot = array();
        $out = $out2 = $out3 = '';

        if ( !$snapshot_id ) {
            throw new \Exception( "No snapshot selected for comparison." );
        }

        wp_cache_flush();

        $table_status = $wpdb->get_results('SHOW TABLE STATUS');

        $snapshot_prefix = $snapshot_id . '_' . $wpdb->prefix;
        $wp_prefix = $wpdb->prefix;

        $common_model_object = CommonModel::get_instance();
         
        foreach ($table_status as $index => $table) {
        
            if (empty($table->Engine)) {
                continue;
            }

            if ( ! $common_model_object->starts_with( $table->Name, $snapshot_prefix ) && 
                ! $common_model_object->starts_with( $table->Name, $wp_prefix ) )
                continue;

            /*if (0 !== stripos($table->Name, $snapshot_prefix) && 0 !== stripos($table->Name, $wp_prefix)) {
                continue;
            }*/

            $info = array();

            //var_dump($table);

            //echo 'SELECT count(*) FROM `' . $table->Name . '`';

            $info['rows'] = $wpdb->get_var('SELECT count(*) FROM `' . $table->Name . '`');
            $info['size_data'] = $table->Data_length;
            $info['size_index'] = $table->Index_length;
            
            //echo 'SHOW CREATE TABLE `' . $table->Name . '`';
        
            $schema = $wpdb->get_row('SHOW CREATE TABLE `' . $table->Name . '`', ARRAY_N);
            $info['schema'] = $schema[1];
            $info['engine'] = $table->Engine;
            $info['fullname'] = $table->Name;
            $table_basename = str_replace(array($snapshot_id . '_'), array(''), $table->Name);
            $info['basename'] = $table_basename;
            $info['corename'] = str_replace(array($wpdb->prefix), array(''), $table_basename);
            $info['snapshot_id'] = $snapshot_id;

            if ( $common_model_object->starts_with( $table->Name, $snapshot_prefix ) ) {
                $snapshot[$table_basename] = $info;
            }

            if ( $common_model_object->starts_with( $table->Name, $wp_prefix ) ) {
                $info['snapshot_id'] = '';
                $current[$table_basename] = $info;
            }
        } // foreach

        $in_both = array_keys(array_intersect_key($current, $snapshot));
        $in_current_only = array_diff_key($current, $snapshot);
        $in_snapshot_only = array_diff_key($snapshot, $current);

        $result = array (
            'in_both' => $in_both,
            'in_current_only' => $in_current_only,
            'in_snapshot_only' => $in_snapshot_only,
            'current' => $current,
            'snapshot' => $snapshot,
        ); 

        return $result;

    }

    public function get_diffrences_between( $array1, $array2, $renderer_name = 'SideBySide' ) {

        // echo AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff.php';

        require_once AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff.php';
        $diff = new \Diff($array1, $array2, array('ignoreWhitespace' => false));
        
        if ( $renderer_name == 'Inline' ) {
            require_once AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff/Renderer/Html/Inline.php';

            // echo AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff/Renderer/Html/Inline.php';
            $renderer = new \Diff_Renderer_Html_Inline;
            return  $diff->Render($renderer);

        } else {
            // echo AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff/Renderer/Html/SideBySide.php';

            require_once AWR_PLUGIN_ABSOLUTE_DIR . '/includes/utils/lib/Diff/Renderer/Html/SideBySide.php';
            $renderer = new \Diff_Renderer_Html_SideBySide;
            return  $diff->Render($renderer);
        
        }
        
    }

    public function get_rows_of_table ( $table, $exclude_this_plugin_options = false ) {

        global $wpdb;

        $query = "SELECT * FROM `$table`";
        if ($exclude_this_plugin_options) {
            $query .= " WHERE option_name NOT IN ('" . implode("', '", AWR_OPTIONS) . "')";
        }

        //echo $query2;
        $rows = $wpdb->get_results($query, 'ARRAY_A');

        $result = array();
        foreach( $rows as $row ) {
            $result[] = implode('|', $row);
        }

        return $result;
        
    } 

    public function get_all(){

        $snapshots = get_option( AWR_SNAPSHOTS, array() );
        
        $snapshots = $snapshots == false || !is_array($snapshots) ? array() : maybe_unserialize ( $snapshots );

        //var_dump($snapshots);

        return $snapshots;
    
    }

    public function get_by_id ( $id ) {

        $snapshots = $this->get_all();

        foreach ( $snapshots as $index => $snapshot ) {

            if ( $snapshot['id'] == $id ) {
                return $snapshot;
            }
        }

        return null;
    }

    public function delete_by_id ( $snapshot_id ) {
        
        $snapshots = $this->get_all();

        $index_to_delete = -1;

        foreach ( $snapshots as $index => $snapshot ) {

            if ( $snapshot['id'] == $snapshot_id ) {
                $index_to_delete = $index;
                break;
            }
        }
        
        if ( $index_to_delete != -1 ) {
            $this->delete_tables ( $snapshot_id );
            unset( $snapshots[$index_to_delete] );
            $snapshots = array_values($snapshots); // for arranging indexes
            update_option ( AWR_SNAPSHOTS, $snapshots, false );
        }
        
        return 1;
    }
    
    public function delete_all () {
        
        $snapshots = $this->get_all();

        foreach ( $snapshots as $index => $snapshot ) {

            $snapshot_id = $snapshot['id'];

            $this->delete_tables ( $snapshot_id );
            unset( $snapshots[$index] );
            
        }

        $snapshots = array_values($snapshots); // for arranging indexes
        update_option ( AWR_SNAPSHOTS, $snapshots, false );
        
        return 1;
    }

    public function get_used_tables () {

        $snapshots = $this->get_all();

        $used_tables = array();

        foreach ( $snapshots as $snapshot ) {

            $id = $snapshot['id'];

            $tablesnames  = $snapshot['data']['tbl_names'];
            foreach ( $tablesnames as $tablename ) {
                $used_tables[] = $id . '_' . $tablename;
            }
        }

        return $used_tables;
    }

    public function restore_by_id ( $snapshot_id ) {

        $reset_form_data = array();
        FullReseterModel::get_instance()->export_current_plugin_infos_to ( $reset_form_data );  

        global $wpdb;

        $new_tables = array();

        $table_status = $wpdb->get_results('SHOW TABLE STATUS');
        
        $snapshot_prefix = $snapshot_id . '_' . $wpdb->prefix;

        if (is_array($table_status)) {
            foreach ($table_status as $index => $table) {
                if ( 0 !== stripos($table->Name, $snapshot_prefix) ) {
                    continue;
                }
                if (empty($table->Engine)) {
                    continue;
                }

                $new_tables[] = $table->Name;
            } // foreach
        } else {
            throw new \Exception('Can\'t get table status data.');
        }

        foreach ($table_status as $index => $table) {
            if (0 !== stripos($table->Name, $wpdb->prefix)) {
                continue;
            }
            if (empty($table->Engine)) {
                continue;
            }

            $wpdb->query('DROP TABLE `' . $table->Name . '`');
        } // foreach

        // copy snapshot tables to original name
        foreach ($new_tables as $table) {
            $new_name = str_replace($snapshot_id . '_', '', $table);

            $wpdb->query('CREATE TABLE `' . $new_name . '` LIKE `' . $table . '`');
            $wpdb->query('INSERT `' . $new_name . '` SELECT * FROM `' . $table . '`');
        }

        wp_cache_flush();

        FullReseterModel::get_instance()->import_current_plugin_infos_from( $reset_form_data );

        return 1;

    }
    
    private function copy_tables ( &$snapshot_data, $options ) {

        if ( !is_array( $snapshot_data ) ) 
            return;

        global $wpdb;
        
        $tbl_core = $tbl_custom = $tbl_size = $tbl_rows = 0;

        $table_status = $wpdb->get_results('SHOW TABLE STATUS');

        if (is_array($table_status)) {
        
            foreach ($table_status as $index => $table) {
                if (0 !== stripos($table->Name, $wpdb->prefix)) {
                    continue;
                }
                if (empty($table->Engine)) {
                    continue;
                }

                $tbl_rows += $table->Rows;
                $tbl_size += $table->Data_length + $table->Index_length;
                if (in_array($table->Name, AWR_CORE_TABLES)) {
                    $tbl_custom++;
                }

                $snapshot_data['tbl_names'][] = $table->Name;

                if ( array_key_exists('optimize_tables', $options) && $options['optimize_tables'] == true) {
                    $wpdb->query('OPTIMIZE TABLE `' . $table->Name . '`');
                }
                $wpdb->query('CREATE TABLE `' . $snapshot_data['id'] . '_' . $table->Name . '` LIKE `' . $table->Name . '`');
                $wpdb->query('INSERT `' . $snapshot_data['id'] . '_' . $table->Name . '` SELECT * FROM `' . $table->Name . '`');
            
            } // foreach
        } else {
            throw new \Exception('Can\'t get table status data.');
        }

        $snapshot_data['tbl_core']   = $tbl_core;
        $snapshot_data['tbl_custom'] = $tbl_custom;
        $snapshot_data['tbl_rows']   = $tbl_rows;
        $snapshot_data['tbl_size']   = $tbl_size;
    }

    private function delete_tables ( $snapshot_id ) {

        if ( empty($snapshot_id) ) 
            return;

        global $wpdb;
        
        $tables_to_delete = array();

        $table_status = $wpdb->get_results('SHOW TABLE STATUS');

        if (is_array($table_status)) {
        
            foreach ($table_status as $index => $table) {
                if (0 !== stripos($table->Name, $snapshot_id . '_')) {
                    continue;
                }

                $tables_to_delete[] = $table->Name;

            } // foreach
        } else {
            throw new \Exception('Can\'t get table status data.');
        }

        foreach ( $tables_to_delete as $table ) {
            $wpdb->query('DROP TABLE `' . $table . '`');            
        }
    }

    private function save_snapshot ( $snapshot ) {

        $snapshots = $this->get_all();

        //$id = $snapshot['id'];
        //$snapshots[$id] = $snapshot;

        $snapshots[] = $snapshot;

        //var_dump($snapshots);
        update_option(AWR_SNAPSHOTS, $snapshots);

        return 1;
    }


}


?>