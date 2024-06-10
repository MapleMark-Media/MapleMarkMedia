<?php 

add_action('wp_ajax_AWR_SHOW_NOTIFICATIONS', array ( \awr\endpoints\CommonController::get_instance(), 'show_notifications' )   );
add_action('wp_ajax_awr_hide_video', array ( \awr\endpoints\CommonController::get_instance(), 'hide_video' )   );
add_action('wp_ajax_awr_system_infos', array ( \awr\endpoints\CommonController::get_instance(), 'get_system_infos' )   );
add_action('wp_ajax_awr_change_nav_tab', array ( \awr\endpoints\CommonController::get_instance(), 'change_nav_menu' ) );
add_action('wp_ajax_awr_save_hidden_bloc', array ( \awr\endpoints\CommonController::get_instance(), 'save_hidden_bloc' ) );

add_action('wp_ajax_awr_count_option_items', array ( \awr\endpoints\ToolsResetController::get_instance(), 'count_option_items' ) );
add_action('wp_ajax_awr_get_tools_counts', array ( \awr\endpoints\ToolsResetController::get_instance(), 'count_all_options_items' ) );

add_action('wp_ajax_awr_reset_options', array ( \awr\endpoints\ToolsResetController::get_instance(), 'execute' ) );

// Add actions for Ajax
add_action('wp_ajax_awr_full_reset', array ( \awr\endpoints\FullResetController::get_instance(), 'execute' )  );



add_action('wp_ajax_awr_create_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'create') );
add_action('wp_ajax_awr_get_snapshots', array ( \awr\endpoints\SnapshotController::get_instance(), 'get_all') );
add_action('wp_ajax_awr_delete_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'delete') );
add_action('wp_ajax_awr_bulk_delete_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'bulk_delete') );
add_action('wp_ajax_awr_execute_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'run') );
add_action('wp_ajax_awr_compare_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'compare_current_to') );
add_action('wp_ajax_awr_download_snapshot', array ( \awr\endpoints\SnapshotController::get_instance(), 'download') );


?>