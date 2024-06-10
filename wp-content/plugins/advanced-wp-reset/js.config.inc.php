<?php

global $wp_version;

$message_array = array(

	'ajaxurl' 		 	=> admin_url('admin-ajax.php'),
	'images_path'	 	=> AWR_PLUGIN_IMG_URL . '/',
	'are_you_sure'   	=> __('Are you sure to continue?', AWR_PLUGIN_TEXTDOMAIN),
	'warning_msg' 	 	=> __('You are about to reset your database. Any content will be lost!', AWR_PLUGIN_TEXTDOMAIN),
	'custom_warning' 	=> __('You are about to perform the following action:', AWR_PLUGIN_TEXTDOMAIN),			
	'irreversible_msg' 	=> __('THERE IS NO UNDO!', AWR_PLUGIN_TEXTDOMAIN),
	'type_reset'  	 	=> sprintf(__('Please enter the word "<b>%s</b>" correctly in the input and then click on the <b>Reset</b> button', AWR_PLUGIN_TEXTDOMAIN), "reset"),
	'processing' 	 	=> __('Processing...', AWR_PLUGIN_TEXTDOMAIN),
	'done' 			 	=> __('Done!', AWR_PLUGIN_TEXTDOMAIN),
	'cancel' 		 	=> __('Cancel', AWR_PLUGIN_TEXTDOMAIN),
	'Continue' 		 	=> __('Continue', AWR_PLUGIN_TEXTDOMAIN),
	'keep_active_theme' => __('Keep active theme', AWR_PLUGIN_TEXTDOMAIN),
	'keep_this_plugin' 	=> __('Keep current plugin', AWR_PLUGIN_TEXTDOMAIN),
	'unknown_error' 	=> __('Unknown error!', AWR_PLUGIN_TEXTDOMAIN),
	'ajax_nonce'	 	=> wp_create_nonce('awr_nonce'),
	'no_name_provided' 	=> __('No name provided', AWR_PLUGIN_TEXTDOMAIN),
	'no_keyprovided' 	=> __('Please enter you activation key', AWR_PLUGIN_TEXTDOMAIN),

	LICENCE_STATE_NOTFOUND => __('License not found.', AWR_PLUGIN_TEXTDOMAIN),
	LICENCE_STATE_EXPIRED 	=> __('Expired license.', AWR_PLUGIN_TEXTDOMAIN),
	LICENCE_STATE_INVALID 	=> __('Invalid license.', AWR_PLUGIN_TEXTDOMAIN),
	LICENCE_STATE_VALID 	=> __('Valid license.', AWR_PLUGIN_TEXTDOMAIN),
	'license_activation_error' 	=> __('An error occurend during activation key check. Please try later.', AWR_PLUGIN_TEXTDOMAIN),
	'snapshot_download_script_url' => AWR_PLUGIN_ABSOLUTE_URL . '/pro/includes/endpoints/snapshots-downloader.php',
	'wp_version' 			=> $wp_version,
	

);


if ( !AWR_IS_PRO_VERSION ) { 

	// FOR THE POPUP : START

	$banner_infos = \awr\services\CommonService::get_instance()->get_current_banner_infos ( 'popup' );
		
	if ( is_array($banner_infos) ) {
		$message_array['awr_pro_url'] = $banner_infos['link'];
		$message_array['awr_pro_text'] = $banner_infos['text'];;
		$message_array['awr_pro_offer'] = $banner_infos['offer'];
		$message_array['awr_pro_offer_message'] = $banner_infos['offer_message'];
	}

	// FOR THE POPUP : END

}

//var_dump($message_array);

wp_localize_script('awr_script_js', 'awr_ajax_obj', $message_array);

?>