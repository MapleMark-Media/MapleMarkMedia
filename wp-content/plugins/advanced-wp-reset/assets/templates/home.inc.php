<?php 
use awr\services\CommonService as CommonService; 
$license_message = 'valid';
$premium_bloc = '<!-- Premium Badge -->
            <span class="premium-badge">
                <span class="icon-lock"></span>
                Pro
            </span>';
            $premium_frame_div_start = '<div class="awpr-premium-frame space-y-6">';
            $premium_frame_div_end = '</div>';
$premium_button_class = 'in-pro-only';
$license = null;
if ( AWR_IS_PRO_VERSION ) {
	$license = \awr\services_pro\LicenseService::get_instance()->check();
	$license_message = $license['message'];
	$premium_bloc = '';
	$premium_frame_div_start = '';
	$premium_frame_div_end = '';
	$premium_button_class = '';
}
$always_show_notifications = CommonService::get_instance()->get_show_notifications ();
//$nav_anchor = isset($_SESSION['nav_anchor']) ? $_SESSION['nav_anchor'] : 'awpr-reset' ;
$nav_anchor = CommonService::get_instance()->get_nav ();
$nav_anchor =  $nav_anchor ? $nav_anchor : 'awpr-reset';
$awpr_li_reset_class 		= $nav_anchor == 'awpr-reset' 		? 'awpr-active' : '';
$awpr_li_snapshots_class 	= $nav_anchor == 'awpr-snapshots' 	? 'awpr-active' : '';
$awpr_li_tools_class 		= $nav_anchor == 'awpr-tools' 		? 'awpr-active' : '';
$awpr_li_collections_class 	= $nav_anchor == 'awpr-collections' ? 'awpr-active' : '';
$awpr_li_switcher_class 	= $nav_anchor == 'awpr-switcher' 	? 'awpr-active' : '';
$awpr_li_settings_class 	= $nav_anchor == 'awpr-settings' 	? 'awpr-active' : '';
$awpr_div_reset_class 		= $nav_anchor == 'awpr-reset' 		? '' : 'hidden';
$awpr_div_snapshots_class 	= $nav_anchor == 'awpr-snapshots' 	? '' : 'hidden';
$awpr_div_tools_class 		= $nav_anchor == 'awpr-tools' 		? '' : 'hidden';
$awpr_div_collections_class = $nav_anchor == 'awpr-collections' ? '' : 'hidden';
$awpr_div_switcher_class 	= $nav_anchor == 'awpr-switcher' 	? '' : 'hidden';
$awpr_div_settings_class 	= $nav_anchor == 'awpr-settings' 	? '' : 'hidden';
$hidden_blocs = CommonService::get_instance()->get_hidden_blocs();
$hidden_blocs = is_array($hidden_blocs) ? array_values($hidden_blocs) : array();

$hidden_videos = CommonService::get_instance()->get_hidden_videos();
$hidden_videos = is_array($hidden_videos) ? array_values($hidden_videos) : array();
?>