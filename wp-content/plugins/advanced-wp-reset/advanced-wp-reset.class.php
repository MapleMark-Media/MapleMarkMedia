<?php 
class AWR_Application {
	/* For Singleton Pattern */
    private static $_instance = null;
    public static function get_instance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new AWR_Application();  
        }
        return self::$_instance;
    }
	function add_plugin_links( $actions, $plugin_file ) {

		$links = array();
	    if ( AWR_PLUGIN_FILENAME === $plugin_file ) {
	    	$utm_campaign = 'ongoing';
	        $utm_source = 'free_plugin';
	        // the remaining vars are definied in their locations, banners, popup, etc.
	        // Right banner
	        $banner_utm_medium  = 'plugins_page';
	        $banner_utm_content = 'plugin_link';
	        $link = AWR_PLUGIN_UPGRADE_URL . '?utm_campaign=' . $utm_campaign . '&utm_source=' . $utm_source . '&utm_medium=' . $banner_utm_medium . '&utm_content=' . $banner_utm_content; 
	    	$links['upgrade'] = '<a href="' . $link . '" target="_blank" style="font-weight: bold; color: #1da867;">' . __( 'Upgrade to Pro', AWR_PLUGIN_TEXTDOMAIN ) . '</a>';
	    	$links['plugin_homepage'] = '<a href="' . admin_url('tools.php?page=awr_full_reset') . '">' . __('Home', AWR_PLUGIN_TEXTDOMAIN). '</a>';
	   	}
	    return array_merge($links, $actions);
	}
	function add_plugin_meta_links( $links, $file ) {

		if ( AWR_PLUGIN_FILENAME !== $file ) {
			return $links;
		}
		$support_link = '<a target="_blank" href="' . AWR_PLUGIN_SUPPORT . '" title="' . __('Get help', AWR_PLUGIN_TEXTDOMAIN) . '">' . __('Support', AWR_PLUGIN_TEXTDOMAIN) . '</a>';
		$home_link = '<a target="_blank" href="' . AWR_PLUGIN_STORE_URL . '" title="' . __('Plugin Homepage', AWR_PLUGIN_TEXTDOMAIN) . '">' . __('Plugin Homepage', AWR_PLUGIN_TEXTDOMAIN) . '</a>';
		$rate_link = '<a target="_blank" href="' . AWR_PLUGIN_RATING . '" title="' . __('Rate the plugin', AWR_PLUGIN_TEXTDOMAIN) . '">' . __('Rate the plugin ★★★★★', AWR_PLUGIN_TEXTDOMAIN) . '</a>';
		$utm_campaign = 'ongoing';
        $utm_source = 'free_plugin';
        // the remaining vars are definied in their locations, banners, popup, etc.
        // Right banner
        $banner_utm_medium  = 'plugins_page';
        $banner_utm_content = 'plugin_meta_link';
        $link = AWR_PLUGIN_UPGRADE_URL . '?utm_campaign=' . $utm_campaign . '&utm_source=' . $utm_source . '&utm_medium=' . $banner_utm_medium . '&utm_content=' . $banner_utm_content; 
		$pro_version = '<a target="_blank" href="' . $link . '" title="' . __('PRO Version', AWR_PLUGIN_TEXTDOMAIN) . '">' . __('PRO version', AWR_PLUGIN_TEXTDOMAIN) . '</a>';
		$links[] = $pro_version;
		$links[] = $support_link;
		$links[] = $home_link;
		$links[] = $rate_link;
		return $links;
	}
	public function __construct() {

		add_action ( 'admin_enqueue_scripts' , array( $this, 'enqueue_css_js' ) );
		add_action ( 'admin_menu', array( $this, 'add_admin_pages') );
		
		/* include files */
		include_once 'includes/endpoints/all.inc.php';
		include_once 'includes/services/all.inc.php';
		include_once 'includes/models/all.inc.php';
		include_once 'includes/utils/all.inc.php';
		
		/* Includes all the ajax actions */ 
		include_once 'actions.inc.php';
		
		load_plugin_textdomain( AWR_PLUGIN_TEXTDOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages' );
		
		add_filter( 'plugin_action_links', array( $this, 'add_plugin_links' ) , 10, 2 );
		add_filter('plugin_row_meta', array($this, 'add_plugin_meta_links'), 10, 2);
		add_action('admin_notices', array($this, 'display_rate_notice'));
		add_action('admin_notices', array($this, 'display_activation_notice'));
		add_action('admin_notices', array($this, 'display_news_notice'));
		
	}

	function installed_more_than ( $days ) {

		if ( !get_option ( AWR_INST_TIME ) )
			update_option ( AWR_INST_TIME, time() );

		/*if ( get_option ( AWR_INST_TIME ) == -1 )
			return;*/		

		$activation_time = get_option ( AWR_INST_TIME ); // Get the option, if no option stored, we initiate it by current time

		$now = time();
		$delay_to_show = $days * DAY_IN_SECONDS;

		if ( $now - $activation_time > $delay_to_show )
			return true;
		else 
			return false;

	}

	function was_there_any_reset () {

		if ( !get_option ( AWR_RESET_DONE ) )
			return false;

		return true;
	}
	
	// Add admin notice to rate plugin

	function display_rate_notice(){

		// If user click on "I Already Did" or "Please Don't Show This Again" 
		if (isset($_GET['AWR_rate']) && $_GET['AWR_rate'] == 0 ) 
			update_option ( AWR_STP_RTG, 1 );

		// If there is no option AWR_STP_RTG in the database, so user has not clicked on the button yet
		if ( !get_option ( AWR_STP_RTG ) )
			update_option ( AWR_STP_RTG, -1 );
		
		// If the option AWR_STP_RTG exists in the database and is set to -1, we don't display the message
		if ( get_option ( AWR_STP_RTG ) == 1 )
			return;
		
		// If it is not more than 15 days installed or any reset has been done
		if( ! ($this->was_there_any_reset() || $this->installed_more_than ( 15 ) ) )
			return;
		

		$AWR_new_URI = $_SERVER['REQUEST_URI'];
		$AWR_new_URI = add_query_arg('AWR_rate', "0", $AWR_new_URI);
		// Style should be done here because it is not loaded outside the plugin admin panel
		?>
		<style>
			.awpr-app-container {
				max-width: 1500px;
				margin: 0 auto;
				position: relative;
				color: #06283D;
			}
			.flex {
				display: flex;
			}
			.flex-wrap {
				flex-wrap: wrap;
			}
			.items-center {
				align-items: center;
			}
			.gap-3 {
				gap: 12px;
			}
			.rounded {
				border-radius: 4px;
			}
			.awpr-notice-button {
			    display:inline-flex;
			    align-items:center;
			    justify-content:center;
			    gap:.5rem;
			    border-width:1px;
			    border-color:#000;
			    background-color:initial;
			    padding:.25rem .75rem;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}
			.awpr-notice-button-outline-primary {
				border-color: #822abb;
				color: #822abb;
			}
			.awpr-notice-button-outline-primary:focus,
			.awpr-notice-button-outline-primary:hover {
				color: #fff;
				border-color: #581c87;
				background-color: #581c87;
			}
			.awpr-notice-button-success {
				color: #fff;
				border-color: #37ae53;
				background-color: #37ae53;
			}
			.awpr-notice-button-success:focus,
			.awpr-notice-button-success:hover {
				color: #fff;
				border-color: #15803d;
				background-color: #15803d;
			}
			.awpr-notice-button-link {
				display:inline-flex;
				color: #822abb !important;
				border: 0;
				border-bottom: 1px solid #822abb;
			    background-color:initial;
			    padding: 0;
				padding-bottom: 2px;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}
			.awpr-notice-button-link:hover,
			.awpr-notice-button-link:focus {
				color: #581c87 !important;
				border-bottom-color: #581c87
			}
		</style>
		<div class="awpr-app-container">
			<div class="notice notice-success"style="padding:10px 30px;border-top:0;border-right:0;border-bottom:0;margin:1rem">
			<!--div style="padding:15px !important;" class="updated DBR-top-main-msg is-dismissible"-->
				<span style="font-size:20px;color:#00A328;font-weight:bold;display:block"><?php _e('Awesome!', 'advanced-wp-reset'); ?></span>
				<p style="font-size:14px;line-height:30px;color:#06283D">
					<?php _e('The plugin <strong>"Advanced DB Reset"</strong> just helped you reset your database to a fresh installation with success!', 'advanced-wp-reset'); ?>
					<br/>
					<?php _e('Could you please kindly help the plugin in your turn by giving it 5 stars rating? (Thank you in advance)', 'advanced-wp-reset'); ?>
					<div style="font-size:14px;margin-top:10px;" class="flex flex-wrap gap-3 items-center">
						<a class="awpr-notice-button awpr-notice-button-success rounded" target="_blank" href="https://wordpress.org/support/plugin/advanced-wp-reset/reviews/?filter=5#new-post">
							<?php _e('Ok, You Deserved It', 'advanced-wp-reset'); ?>
						</a>
						<!--form method="post" action="" class="flex flex-wrap gap-3 items-center">
							<input type="hidden" name="dont_show_rate" value=""/-->
							<a class="awpr-notice-button awpr-notice-button-outline-primary rounded" href="<?php echo esc_url( $AWR_new_URI ); ?>"><?php _e('I Already Did', 'advanced-wp-reset'); ?></a>
							<a class="awpr-notice-button-link" href="<?php echo esc_url( $AWR_new_URI ); ?>"><?php _e('Please Don\'t Show This Again', 'advanced-wp-reset'); ?></a>
						<!--/form-->
					</div>
				</p>
			</div>
		</div>
	<?php
	}

	function display_news_notice( ){

		global $awr_tool_submenu;

		$screen = get_current_screen();

		if($screen->id != $awr_tool_submenu){
			return;
		}

		// If user click on "I Already Did" or "Hide" 
		if (isset($_GET['AWR_hide_news']) && $_GET['AWR_hide_news'] == 0 ) 
			update_option ( AWR_STP_NEWS, 1 );

		// If there is no option AWR_STP_RTG in the database, so user has not clicked on the button yet
		if ( !get_option ( AWR_STP_NEWS ) )
			update_option ( AWR_STP_NEWS, -1 );
		
		// If the option AWR_STP_NEWS exists in the database and is set to -1, we don't display the message
		if ( get_option ( AWR_STP_NEWS ) == 1 )
			return;
		
		$AWR_new_URI = $_SERVER['REQUEST_URI'];
		$AWR_new_URI = add_query_arg('AWR_hide_news', "0", $AWR_new_URI);
		// Style should be done here because it is not loaded outside the plugin admin panel
		?>
		<style>
			.awpr-app-container {
				max-width: 1500px;
				margin: 0 auto;
				position: relative;
				color: #06283D;
			}
			.flex {
				display: flex;
			}
			.flex-wrap {
				flex-wrap: wrap;
			}
			.items-center {
				align-items: center;
			}
			.gap-3 {
				gap: 12px;
			}
			.rounded {
				border-radius: 4px;
			}
			.awpr-notice-button {
			    display:inline-flex;
			    align-items:center;
			    justify-content:center;
			    gap:.5rem;
			    border-width:1px;
			    border-color:#000;
			    background-color:initial;
			    padding:.25rem .75rem;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}
			.awpr-notice-button-outline-primary {
				border-color: #822abb;
				color: #822abb;
			}
			.awpr-notice-button-outline-primary:focus,
			.awpr-notice-button-outline-primary:hover {
				color: #fff;
				border-color: #581c87;
				background-color: #581c87;
			}
			.awpr-notice-button-success {
				color: #fff;
				border-color: #37ae53;
				background-color: #37ae53;
			}
			.awpr-notice-button-success:focus,
			.awpr-notice-button-success:hover {
				color: #fff;
				border-color: #15803d;
				background-color: #15803d;
			}
			.awpr-notice-button-link {
				display:inline-flex;
				color: #822abb !important;
				border: 0;
				border-bottom: 1px solid #822abb;
			    background-color:initial;
			    padding: 0;
				padding-bottom: 2px;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}
			.awpr-notice-button-link:hover,
			.awpr-notice-button-link:focus {
				color: #581c87 !important;
				border-bottom-color: #581c87
			}
		</style>
		<div class="awpr-app-container">
			<div class="notice notice-success"style="padding:10px 30px;border-top:0;border-right:0;border-bottom:0;margin:1rem">
			<!--div style="padding:15px !important;" class="updated DBR-top-main-msg is-dismissible"-->
				<span style="font-size:20px;color:#00A328;font-weight:bold;display:block"><?php _e("What's New in Advanced WP Reset 2.0.6!", 'advanced-wp-reset'); ?></span>
				<p style="font-size:14px;line-height:30px;color:#06283D">
					<?php _e('In this version, the <b>Advanced DB Reset</b> plugin introduces the <b>Snapshot</b> feature, allowing you to create, download, restore, and compare snapshots with others.', 'advanced-wp-reset'); ?>
					<br/>
					<div style="font-size:14px;margin-top:10px;" class="flex flex-wrap gap-3 items-center">
						<a class="awpr-notice-button-link" href="<?php echo esc_url( $AWR_new_URI ); ?>"><?php _e('HIDE', 'advanced-wp-reset'); ?></a>
					</div>
				</p>
			</div>
		</div>
	<?php
	}

	function remind_me_less_than ( $days ) {

		if ( !get_option ( AWR_REMIND_TOP_NOTICE ) )
			return false;

		$remind_me_time = get_option ( AWR_REMIND_TOP_NOTICE ); // Get the option, if no option stored, we initiate it by current time

		$now = time();
		$delay_to_show = $days * DAY_IN_SECONDS;

		if ( $now - $remind_me_time < $delay_to_show )
			return true;
		else 
			return false;

	}

	function display_activation_notice() {
	    
	    // If user click on "I Already Did" or "Please Don't Show This Again" 
		if (isset($_GET['AWR_stop_features']) && $_GET['AWR_stop_features'] == 0 ) 
			update_option ( AWR_STP_TOP_NOTICE, 1 );

		if (isset($_GET['AWR_remind_features']) && $_GET['AWR_remind_features'] == 0 ) 
			update_option ( AWR_REMIND_TOP_NOTICE, time() );

		// If there is no option AWR_STP_TOP_NOTICE in the database, so user has not clicked on the button yet
		if ( !get_option ( AWR_STP_TOP_NOTICE ) )
			update_option ( AWR_STP_TOP_NOTICE, -1 );
		
		// If the option AWR_STP_TOP_NOTICE exists in the database and is set to -1, we don't display the message
		if ( get_option ( AWR_STP_TOP_NOTICE ) == 1 )
			return;

	    // If it is not more than 15 days installed or any reset has been done
		if( $this->remind_me_less_than ( 15 ) ) 
			return;
		
	    $AWR_new_URI = $_SERVER['REQUEST_URI'];
		$stop_uri = add_query_arg('AWR_stop_features', "0", $AWR_new_URI);
		$remind_me = add_query_arg('AWR_remind_features', "0", $AWR_new_URI);

        ?>
        <style>
			.awpr-app-container {
				max-width: 1500px;
				margin: 0 auto;
				position: relative;
				color: #06283D;
			}
			.flex {
				display: flex;
			}
			.flex-wrap {
				flex-wrap: wrap;
			}
			.items-center {
				align-items: center;
			}
			.gap-3 {
				gap: 12px;
			}
			.rounded {
				border-radius: 4px;
			}
			.awpr-activation-button {
			    display:inline-flex;
			    align-items:center;
			    justify-content:center;
			    gap:.5rem;
			    border-width:1px;
			    border-color:#000;
			    background-color:initial;
			    padding:.25rem .75rem;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}

			.awr-activation-logo  {
				width: 180px;
			}

			.awpr-activation-button-outline-primary {
				border-color: #822abb;
				color: #822abb;
				border-style: double
			}
			.awpr-activation-button-outline-primary:focus,
			.awpr-activation-button-outline-primary:hover {
				color: #fff;
				border-color: #822ABB;
				background-color: #822ABB;
			}
			.awr-notice-vervlet {
				border-color: #7556A1;
			}
			.awpr-activation-button-success {
				color: #fff;
				border-color: #822ABB;
				background-color: #822ABB;
			}
			.awpr-activation-button-success:focus,
			.awpr-activation-button-success:hover {
				color: #fff;
				border-color: #581c87;
				background-color: #581c87;
			}
			.awpr-activation-button-link {
				display:inline-flex;
				color: #822abb !important;
				border: 0;
				border-bottom: 1px solid #822abb;
			    background-color:initial;
			    padding: 0;
				padding-bottom: 2px;
			    text-align:center;
			    font-size:13px;
			    font-weight:400;
			    color:inherit;
			    transition-property:all;
			    transition-duration:.15s;
			    transition-timing-function:cubic-bezier(.4,0,.2,1);
				text-decoration: none;
			}
			.awpr-activation-button-link:hover,
			.awpr-activation-button-link:focus {
				color: #581c87 !important;
				border-bottom-color: #581c87
			}
		</style>
		<div class="awpr-app-container">
			<div class="notice awr-notice-vervlet"style="padding:10px 30px;border-top:0;border-right:0;border-bottom:0;margin:1rem">
				<img src="<?php echo AWR_PLUGIN_IMG_URL; ?>/logo.svg" alt="Logo" class="w-44 awr-activation-logo">
				<p style="font-size:14px;line-height:30px;color:#06283D">
					<?php _e('NEW! Advanced WP Reset has been updated to v2 with tons of new features like advanced custom Resets, site Snapshots, WordPress Switcher and 30+ time saving tools.', 'advanced-wp-reset'); ?>
					<div style="font-size:14px;margin-top:10px;" class="flex flex-wrap gap-3 items-center">
						<a class="awpr-activation-button awpr-activation-button-success rounded"  href="<?php echo admin_url('tools.php?page=awr_full_reset'); ?>">
							<?php _e('TAKE A LOOK NOW', 'advanced-wp-reset'); ?>
						</a>
						<a class="awpr-activation-button awpr-activation-button-outline-primary rounded" href="<?php echo esc_url( $remind_me ); ?>"><?php _e('REMIND ME LATER'); ?></a>
						<a class="awpr-activation-button-link" href="<?php echo esc_url( $stop_uri ); ?>"><?php _e('HIDE', 'advanced-wp-reset'); ?></a>
					</div>
				</p>
			</div>
		</div>

        <?php
	}

	function activate() {

		//$this->enqueue_css_js();
	    $this->set_scheduled_tasks();
	    // Show notifications, if not set, we set it to true
        $show_notifications = get_option( AWR_SHOW_NOTIFICATIONS, true); 
        update_option ( AWR_SHOW_NOTIFICATIONS, $show_notifications );
		flush_rewrite_rules();
	}

	function deactivate() {
	    $this->clear_scheduled_tasks();
		flush_rewrite_rules();
	}

	function set_scheduled_tasks() {
	}
	function clear_scheduled_tasks() {

	}
	function enqueue_css_js($hook) {

		// Enqueue our js and css in the plugin pages only
		global $awr_tool_submenu;
		if($hook != $awr_tool_submenu){
			return;
		}
		// JS
		wp_enqueue_script( 'awr_common', AWR_PLUGIN_JS_URL . '/app-common.js' );
		wp_enqueue_script( 'sweet2_js', AWR_PLUGIN_JS_URL . '/sweetalert2.all.min.js');
		wp_enqueue_script( 'awr_app_swal', AWR_PLUGIN_JS_URL . '/app_swal.js' );
		wp_enqueue_script( 'venobox_js', AWR_PLUGIN_JS_URL . '/venobox.min.js' );
		wp_enqueue_script( 'awr_script_js', AWR_PLUGIN_JS_URL . '/app.js', array ('awr_app_swal') );
		wp_enqueue_script( 'awr_reset_js', AWR_PLUGIN_JS_URL . '/app-reset.js', array ('awr_app_swal') );
		wp_enqueue_script( 'awr_tools_js', AWR_PLUGIN_JS_URL . '/app-tools.js', array ('awr_app_swal') );
		wp_enqueue_script( 'awr_snapshot_js', AWR_PLUGIN_JS_URL . '/app-snapshot.js', array ('awr_app_swal') );
		wp_enqueue_script( 'awr_free_js', AWR_PLUGIN_JS_URL . '/free-script.js', array ('awr_app_swal') );
		
		// CSS
		wp_enqueue_style( 'awr_style', AWR_PLUGIN_CSS_URL . '/style.css' );
		wp_enqueue_style( 'venobox_css', AWR_PLUGIN_CSS_URL . '/venobox.min.css' );
		wp_enqueue_style( 'awr_icon_css', AWR_PLUGIN_CSS_URL . '/icons.css' );
		//wp_enqueue_style( 'awr_custom_icon_css', AWR_PLUGIN_CSS_URL . '/custom-icons.css' );
		wp_enqueue_style( 'google_css', AWR_PLUGIN_CSS_URL . '/google-css.css' );
		
		require_once 'js.config.inc.php';
	}

	function add_admin_pages() {
		global $awr_tool_submenu;
		$awr_tool_submenu = add_submenu_page(
			'tools.php', 
			AWR_PLUGIN_SHORT_NAME, 
			AWR_PLUGIN_SHORT_NAME, 
			'manage_options', 
			"awr_full_reset", 
			array( $this, 'plugin_home_page' ) 
		);
	}

	function plugin_home_page() {
		require_once AWR_PLUGIN_ABSOLUTE_DIR . '/assets/templates/home-template.php';
	}
}
?>