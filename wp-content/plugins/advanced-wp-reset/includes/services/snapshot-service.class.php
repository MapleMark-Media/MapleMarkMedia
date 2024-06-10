<?php

namespace awr\services;

use awr\models\SnapshotModel as SnapshotModel;
use awr\models\CommonModel as CommonModel;
use awr\models\FullReseterModel as FullReseterModel;

class SnapshotService {

	/* For Singleton Pattern */
    private static $_instance = null;
    private function __construct() {  
    }
 
    public static function get_instance() {
 
        if(is_null(self::$_instance)) {
            self::$_instance = new SnapshotService();  
        }

        return self::$_instance;
    }

    public $autosnapshots_folder = 'awr-autosnapshots';

    public function get_rows_of ( $tablename, $exclude_this_plugin_options = false ) {
        return SnapshotModel::get_instance()->get_rows_of_table($tablename, $exclude_this_plugin_options);
    }

    public function get_difference_between ( $array1, $array2 ) {
        return SnapshotModel::get_instance()->get_diffrences_between( $array1, $array2 );
    }

	public function get_snapshots()
    {
        $snapshots = SnapshotModel::get_instance()->get_all();

        for ( $i = 0; $i< count($snapshots); $i++ ) {
            $snapshots[$i]['data']['time'] = CommonModel::get_instance()->time_passed($snapshots[$i]['data']['time']);
        }

        return $snapshots;
    } 

    public function download($snapshot_id ) {
        return SnapshotModel::get_instance()->export ($snapshot_id);
    }
    
	public function create ( $params = array() ) {
        return SnapshotModel::get_instance()->create ( $params );
    }

    public function get_by_id ( $id ) {
        return SnapshotModel::get_instance()->get_by_id ($id);
    }

    public function delete ( $snapshot_id ) {
        return SnapshotModel::get_instance()->delete_by_id ($snapshot_id);
    }

    public function delete_all () {
        SnapshotModel::get_instance()->delete_all();
    }

    public function restore ( $snapshot_id ) {

        // Get admin user
        $user = FullReseterModel::get_instance()->get_current_admin_user ();
        if ( !$user )
            throw new \Exception( 'No logged in administrator' );

        SnapshotModel::get_instance()->restore_by_id( $snapshot_id );

        // After restoring the snapshot, we check that the user exists in this new database

        $tmp_user = get_user_by('login', $user->user_login);
        
        if ($tmp_user) {
            // We log him
            wp_set_auth_cookie( $tmp_user->ID );
        }

        return 1;
    }

    public function compare_current_to ( $id ) {
        return SnapshotModel::get_instance()->compare_current_to ( $id );
    }
}