<?php 

// Used by the pro version to check that the free is installed
if ( !defined("AWR_IS_PRO_VERSION") ) {
	define( "AWR_IS_PRO_VERSION", 0 );
}

/*if ( !defined("AWR_IS_PRO_VERSION") ) {
	define( "AWR_IS_PRO_VERSION", false );
}*/

if ( !defined("AWR_PLUGIN_NAME") ) {
define( "AWR_PLUGIN_NAME", 'Advanced WP Reset' );
}

if ( !defined("AWR_PLUGIN_SHORT_NAME") ) {
	define( "AWR_PLUGIN_SHORT_NAME", 'Advanced WP Reset' );
}

if ( !defined("AWR_PLUGIN_TEXTDOMAIN") ) {
	define( "AWR_PLUGIN_TEXTDOMAIN", 'advanced-wp-reset' );
}

define("AWR_PLUGIN_VERSION", "2.0.6");

// Plugin options:
define( 'AWR_SNAPSHOTS', 'awr_snapshots' );
define( 'AWR_SHOW_NOTIFICATIONS', 'awr_show_notifications' );
define( 'AWR_HIDDEN_BLOCS', 'awr_hidden_blocs' );
define( 'AWR_PREVIOUS_VERSION', 'awr_previous_version' );
define( 'AWR_PLUGIN_UPDATE_NOTICE', 'awr_plugin_update_notice' );
define( 'AWR_ACTIVATION_DISPLAYED', 'awr_activation_displayed' );
define( 'AWR_CURRENT_PP', 'awr_current_pp' );
define( 'AWR_STP_RTG', 'awr_stp_rtg' );
define( 'AWR_RESET_DONE', 'awr_reset_done' );
define( 'AWR_INST_TIME', 'awr_inst_time' );
define( 'AWR_HIDDEN_VIDEOS', 'awr_hidden_videos' );
define( 'AWR_STP_TOP_NOTICE', 'awr_stp_top_notice' );
define( 'AWR_STP_NEWS', 'awr_stp_news' );

define( 'AWR_REMIND_TOP_NOTICE', 'awr_remind_me_time' );

define ( 'AWR_OPTIONS', 
			array (
				AWR_SNAPSHOTS,
				AWR_SHOW_NOTIFICATIONS,
				AWR_HIDDEN_BLOCS,
				AWR_PREVIOUS_VERSION,
				AWR_PLUGIN_UPDATE_NOTICE,
				AWR_ACTIVATION_DISPLAYED,
				AWR_CURRENT_PP,
				AWR_STP_RTG,
				AWR_RESET_DONE,
				AWR_INST_TIME,
				AWR_HIDDEN_VIDEOS,
				AWR_STP_TOP_NOTICE,
				AWR_STP_NEWS,
				AWR_REMIND_TOP_NOTICE
			)
);

define ( 'AWR_OPTIONS_NAME', 
			array (
				'AWR_SNAPSHOTS',
				'AWR_SHOW_NOTIFICATIONS',
				'AWR_HIDDEN_BLOCS',
				'AWR_PREVIOUS_VERSION',
				'AWR_PLUGIN_UPDATE_NOTICE',
				'AWR_ACTIVATION_DISPLAYED',
				'AWR_CURRENT_PP',
				'AWR_STP_RTG',
				'AWR_RESET_DONE',
				'AWR_INST_TIME',
				'AWR_HIDDEN_VIDEOS',
				'AWR_STP_TOP_NOTICE',
				'AWR_STP_NEWS',
				'AWR_REMIND_TOP_NOTICE'
			) 
);

// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'AWR_PLUGIN_STORE_URL', "http://sigmaplugin.com/" );
define( 'AWR_PLUGIN_SUPPORT', "http://sigmaplugin.com/contact");
define ('AWR_PLUGIN_RATING' , "https://wordpress.org/support/plugin/advanced-wp-reset/reviews/?filter=5#new-post");
define( 'AWR_PLUGIN_UPGRADE_URL', "https://awpreset.com/upgrade");

/*define ( 'AWR_PP_INFOS', array (

	array ( 'code' => 'get_50off', 'img' => 'banner_get_50off.jpg', 'text' => 'See Pricing', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'grab_deal', 'img' => 'banner_grab_deal.jpg', 'text' => 'Upgrade to Pro', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'see_plans', 'img' => 'banner_see_plans.jpg', 'text' => 'Upgrade Now', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'see_pricing', 'img' => 'banner_see_pricing.jpg', 'text' => 'See Plans', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'upgrad_now', 'img' => 'banner_upgrad_now.jpg', 'text' => 'Get 50% OFF', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'upgrade_to_pro', 'img' => 'banner_upgrade_to_pro.jpg', 'text' => 'Grab Deal', 'from' => '2023-12-01', 'to' => ''),
	array ( 'code' => 'black_friday_23', 'img' => 'banner_black_friday.jpg', 'text' => 'Black Friday', 'from' => '2023-11-16', 'to' => '2023-11-26'),
	array ( 'code' => 'cyber_monday_23', 'img' => 'banner_cyber_monday.jpg', 'text' => 'Cyber Monday', 'from' => '2023-11-27', 'to' => '2023-11-30'),
) );*/


define ( 'AWR_PP_INFOS', 

	array (

		array (

			'from' => '2023-12-01', 
			'to' => '',
			'banners' => array (
				array ( 'code' => 'get_50off', 'img' => 'banner_get_50off.jpg', 'text' => 'See Pricing', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ),
				/*array ( 'code' => 'grab_deal', 'img' => 'banner_grab_deal.jpg', 'text' => 'Upgrade to Pro', 'offer' => '-50%', 'offer_message' => 'Offer ends soon'  ),
				array ( 'code' => 'see_plans', 'img' => 'banner_see_plans.jpg', 'text' => 'Upgrade Now', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ),
				array ( 'code' => 'see_pricing', 'img' => 'banner_see_pricing.jpg', 'text' => 'See Plans', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ),
				array ( 'code' => 'upgrad_now', 'img' => 'banner_upgrad_now.jpg', 'text' => 'Get 50% OFF', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ),
				array ( 'code' => 'upgrade_to_pro', 'img' => 'banner_upgrade_to_pro.jpg', 'text' => 'Grab Deal', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ),*/
			),
		),

		array (
			'from' => '2023-11-16', 
			'to' => '2023-11-27',
			'banners' => array ( array ( 'code' => 'black_friday_23', 'img' => 'banner_black_friday.jpg', 'text' => 'Black Friday - $39', 'offer' => '5', 'offer_message' =>'Lifetime licences <b>$39</b> only') ),
		),
		
		array (
			'from' => '2023-11-27', 
			'to' => '2023-12-01',
			'banners' => array ( array ( 'code' => 'cyber_monday_23', 'img' => 'banner_cyber_monday.jpg', 'text' => 'Cyber Monday - $39',  'offer' => '5', 'offer_message' =>'Lifetime licences <b>$39</b> only') ),
		),
	) 
);

define ( 'AWR_PP_INFO_DEFAULT', array ( array ( 'code' => 'get_50off', 'img' => 'banner_get_50off.jpg', 'text' => 'See Pricing', 'offer' => '-50%', 'offer_message' => 'Offer ends soon' ) ) );

?>