<?php

/*
Plugin Name: Advanced WP Reset
Plugin URI: https://sigmaplugin.com/
Description: The ultimate solution for resetting your WordPress database or specific components to their default settings using the advanced reset features.
Version: 2.0.6
Requires at least: 4.0
Author: SigmaPlugin
Author URI: https://sigmaplugin.com/
Text Domain: advanced-wp-reset
Domain Path: /languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( defined("AWR_IS_PRO_VERSION") and AWR_IS_PRO_VERSION === 1 ) {


	// Ensure the needed functions are available
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Show warning
	add_action('admin_notices', 'awr_activation_warning' );
	
	// For not showing "Plugin activated".
	add_filter('wp_redirect', 'awr_custom_plugin_activation_redirect', 10, 2);
	
	// Deactivate the plugin
	deactivate_plugins(plugin_basename(__FILE__));
    

} else {

	require_once 'advanced-wp-reset.class.php';
	require_once 'free-config.inc.php';
	require_once 'config.inc.php';

	if ( class_exists ( 'AWR_Application' ) ){
		$awr_object = new AWR_Application();

		// Activation
		register_activation_hook ( __FILE__, array ( $awr_object, 'activate' ) );

		// Deactivation
		register_deactivation_hook ( __FILE__, array ( $awr_object, 'deactivate' ) );
	}

}

function awr_activation_warning() {
    ?>
    <div class="notice notice-warning is-dismissible">
    	<p><?php _e('You already have <b>Advanced WP Reset PRO</b>, which includes all the features of the free version. If you wish to activate the free version for any reason, please deactivate the PRO version first and then activate the free version.', 'advanced-wp-reset'); ?></p>
    </div>
    <?php
}

function awr_custom_plugin_activation_redirect($location, $status) {
    return remove_query_arg('activate', $location);
}