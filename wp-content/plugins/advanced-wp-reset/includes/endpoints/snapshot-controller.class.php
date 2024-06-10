<?php 

namespace awr\endpoints;

use awr\endpoints\AbstractController as AbstractController;
use awr\utils\AjaxOutputter as AjaxOutputter;
use awr\services\ToolsResetService as ToolsResetService;
use awr\services\SnapshotService as SnapshotService;

class SnapshotController extends AbstractController {

    /* For Singleton Pattern */
    private static $_instance = null;
    private function __construct() {  
    }
 
    public static function get_instance() {
 
        if(is_null(self::$_instance)) {
            self::$_instance = new SnapshotController();  
        }

        return self::$_instance;
    }

    private function get_ajax_output ( $blog_infos_array, $result, $keep = 0, $force_reload = 0 ) {

        if ( $keep == 1 ) {

            (new AjaxOutputter())
                ->setCode($result)
                ->generate();

        }

        $action = $force_reload == 1 ? AWR_AJAX_ACTION_RELOAD : AWR_AJAX_ACTION_KEEP;

        if ( $result == 1 ) {
            $action = $plugin['action'] = AWR_AJAX_ACTION_RELOAD;
        }

        (new AjaxOutputter())
                ->setAction($action)
                ->setCode($result)
                ->generate();

    }
    
    public function create () {
        
        $this->check();

        $snapshot = $_REQUEST['data'];
        $snapshot_name = sanitize_text_field ( $snapshot['name'] );

        if ( empty($snapshot_name) ) {

            (new AjaxOutputter())
                ->setCode(0)
                ->setMessage("Snapshot name empty")
                ->generate();
        }

        try {
            
            $result = SnapshotService::get_instance()->create( array ( 'name' => $snapshot_name ) );
            
            (new AjaxOutputter())
                ->setCode($result)
                ->generate();
        
        } catch (\Exception $e) {

            (new AjaxOutputter())
                ->setCode(0)
                ->setMessage($e->getMessage())
                ->generate();

        }
        wp_die();
    }

    public function compare_current_to () {
        
        $this->check();

        $id = $_REQUEST["id"];
        
        if ( empty($id) ) {
            echo -1;
        }
        else {

            global $wpdb;
            $wpdb->flush();

            $array = SnapshotService::get_instance()->compare_current_to ( $id );

            $in_the_current = $array['in_current_only'];
            $output_in_the_current_only = '';

            if ( empty($in_the_current) ) {
                $output_in_the_current_only .= '<span class="awr-snapshot-comparison-no-tables text-awpr-danger italic">There is no table in current only</span>';
            } else {

                $output_in_the_current_only .= '<ul class="space-y-2">';
                foreach ($in_the_current as $table) {
                    $output_in_the_current_only .= '<li class="flex gap-2 mb-0">
                        <span class="icon-check w-3 h-3 rounded-full bg-awpr-success text-white text-[8px] !inline-flex items-center justify-center relative top-[3px]"></span>
                        <span>' . $table['basename'] . '</span>
                    </li>'; 
                }
                $output_in_the_current_only .= '</ul>';
            }


            $in_the_snapshot = $array['in_snapshot_only'];
            $output_in_the_snapshot_only = '';

            if ( empty($in_the_snapshot) ) {
                $output_in_the_snapshot_only .= '<span class="awr-snapshot-comparison-no-tables text-awpr-danger italic">There is no table in snapshot only</span>';
            } else {

                $output_in_the_snapshot_only .= '<ul class="space-y-2">';
                foreach ($in_the_snapshot as $table) {
                    $output_in_the_snapshot_only .= '<li class="flex gap-2 mb-0">
                        <span class="icon-check w-3 h-3 rounded-full bg-awpr-success text-white text-[8px] !inline-flex items-center justify-center relative top-[3px]"></span>
                        <span>' . $table['basename'] . '</span>
                    </li>';

                }
                $output_in_the_snapshot_only .= '</ul>';
            }

            $in_both = $array['in_both'];
            

            /*echo '<div class="awr-in-both-db">
                    <h3>Tables in both databases</h3>
                    ';*/


            if ( !empty($in_both) ) {
                
                $current = $array['current'];
                $snapshot = $array['snapshot'];

                $identicals_LIs = "";
                $differents_LIs = "";

                foreach ($in_both as $tablename) {

                    $tbl_current = $current[$tablename];
                    $tbl_snapshot = $snapshot[$tablename];

                    $schema1 = $tbl_current['schema'];
                    $schema2 = $tbl_snapshot['schema'];

                    $schema1 = preg_replace('/(AUTO_INCREMENT=)([0-9]*) /i', '', $schema1, 1);
                    $schema2 = preg_replace('/(AUTO_INCREMENT=)([0-9]*) /i', '', $schema2, 1);

                    $tbl_snapshot['tmp_schema'] = str_replace($tbl_snapshot['snapshot_id'] . '_' . $tablename, $tablename, $tbl_snapshot['schema']);
                    
                    $schema2 = str_replace($tbl_snapshot['snapshot_id'] . '_' . $tablename, $tablename, $schema2);

                    // Not same schema
                    if ($schema1 != $schema2) {

                        //echo "schema1 <br />";
                        //var_dump($schema1);

                        //echo "#####################schema2 <br />";
                        //var_dump($schema2);

                        $difference = SnapshotService::get_instance()->get_difference_between ( 
                            explode("\n", $schema1), 
                            explode("\n", $schema2) 
                        );

                        $differents_LIs .= '
                        <div class="flex flex-wrap gap-8">
                            <div class="text-sm">
                                <span class="font-bold text-awpr-brand">Table</span> : 
                                <span class="">' . $tbl_current['fullname'] . '</span>
                            </div>
                            <div class="text-sm">
                                <span class="font-bold text-awpr-brand">Rows</span> : 
                                <span class="">' . number_format($tbl_current['rows']) . '/' . number_format($tbl_snapshot['rows']) . '</span>
                            </div>
                        </div>
    
                        <div class="text-sm">
                            <span class="font-bold text-awpr-brand">Schema:</span>
                        </div>
                        ' . $difference;

                        
                    } else {
                        // If schema is the same but not the same rows
                        //else if ( $tbl_current['rows'] != $tbl_snapshot['rows'] ) {
                        // Not same rows
                        
                        $exclude_this_plugin_options = false;

                        if ( $tablename == 'wp_options' ) {
                            $exclude_this_plugin_options = true;
                            continue;
                        }

                        $array1 = SnapshotService::get_instance()->get_rows_of ( $tbl_current['fullname'], $exclude_this_plugin_options );
                        $array2 = SnapshotService::get_instance()->get_rows_of ( $tbl_snapshot['fullname'], $exclude_this_plugin_options );



                        if ( $array1 === $array2  ) {
                            $identicals_LIs .= '<li class="mb-0">' . $tbl_current['fullname'] . '</li>';
                        } else {

                            $difference = "";

                            if ( !is_array( $array1 ) || !is_array( $array2 ) ) {

                                $difference = '<span class="awr-snapshot-comparison-no-tables text-awpr-danger italic">Cannot handle this table.</span>';
                            
                            } else {

                                $difference = SnapshotService::get_instance()->get_difference_between (
                                    $array1, 
                                    $array2,
                                    'Inline'
                                );
                            }

                            $differents_LIs .= '
                            <div class="flex flex-wrap gap-8">
                                <div class="text-sm">
                                    <span class="font-bold text-awpr-brand">Table</span> : 
                                    <span class="">' . $tablename . '</span>
                                </div>
                                <div class="text-sm">
                                    <span class="font-bold text-awpr-brand">Rows</span> : 
                                    <span class="">' . number_format($tbl_current['rows']) . '/' . number_format($tbl_snapshot['rows']) . '</span>
                                </div>
                            </div>
                            
                            <div class="text-sm">
                                <span class="font-bold text-awpr-brand">The schema is the same:</span>
                            </div>
                            <div class="text-sm">
                                <span class="font-bold text-awpr-brand">Rows:</span>
                            </div>
                            ' . $difference;

                        }
                    }
                    
                }

            }

            //echo '</div>';
                // end of '<div class="awr-in-both-db">';
        }

        $output = array (

            'current_only' => $output_in_the_current_only,
            'snapshot_only' => $output_in_the_snapshot_only,
            'identical' => $identicals_LIs == "" ? '<span class="awr-snapshot-comparison-no-tables text-awpr-danger italic text-sm">No identical tables.</span>' : $identicals_LIs,
            'differences' => $differents_LIs == "" ? '<span class="awr-snapshot-comparison-no-tables text-awpr-danger italic text-sm">No different tables.</span>' : $differents_LIs,
        );

        echo json_encode($output);

        wp_die();
    }

    public function download () {

        $this->check();

        require( WP_CONTENT_DIR . '/../wp-load.php');

        $id = $_REQUEST["id"];

        if ( empty($id) ) {
            echo 'No snapshot selected';
            exit();
        }

        $file = SnapshotService::get_instance()->download( $id );

        // Check if the file exists
        if (file_exists($file['path'])) {
            // Set the appropriate headers for the file download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file['path']) . '"');
            header('Content-Length: ' . filesize($file['path']));

            // Read and output the file contents
            readfile($file['path']);

            (new AjaxOutputter())
                        ->setCode(1)
                        ->setMessage('')
                        ->generate();
        } else {
            // File not found, handle the error accordingly
            (new AjaxOutputter())
                ->setCode(0)
                ->setMessage("SQL file could not be generated, try again or contact support")
                ->generate();

        }

        die();
    }

    function run ( $uid = '' ) {

        $this->check();

        $id = $_REQUEST["id"];
        
        if ( empty($id) ) {
            echo -1;
            $this->get_ajax_output( array(), -1, 1);
        }
        else {
            $result = SnapshotService::get_instance()->restore( $id );
            $this->get_ajax_output( array(), $result, 0 );
        } 

        wp_die();
    }

    public function get_all() {
        
        $this->check();

        $snapshots = SnapshotService::get_instance()->get_snapshots();

        //var_dump($snapshots);

        echo json_encode($snapshots);

        wp_die();
    }

    public function delete () {

        $this->check();

        try {

            $id = $_REQUEST["id"];
            
            if ( empty(trim($id)) ) 
                throw new \Exception ('No snapshot selected to delete.');

            $snapshot = SnapshotService::get_instance()->get_by_id($id);

            if ( $snapshot == null ) {
                throw new \Exception ('No snapshot #' . $id . ' found.');           
            }

            SnapshotService::get_instance()->delete( $id );
             
        (new AjaxOutputter())
                        ->setCode(1)
                        ->setMessage('')
                        ->generate();
         
        } catch( \Exception $e ) {

            (new AjaxOutputter())
                ->setCode(0)
                ->setMessage($e->getMessage())
                ->generate();
        }

        wp_die(); // Always die after ajax call

    }

    public function bulk_delete () {

        $this->check();

        try {

            $ids = $_REQUEST["ids"];
            
            if ( !is_array( $ids ) or empty( $ids ) )
                throw new \Exception ('No snapshots selected to delete.');   

            foreach ( $ids as $id ) {
                SnapshotService::get_instance()->delete( $id );
            }

            (new AjaxOutputter())
                        ->setCode(1)
                        ->setMessage('')
                        ->generate();
         
        } catch( \Exception $e ) {

            (new AjaxOutputter())
                ->setCode(0)
                ->setMessage($e->getMessage())
                ->generate();
        }

        wp_die(); // Always die after ajax call

    }

}

?>