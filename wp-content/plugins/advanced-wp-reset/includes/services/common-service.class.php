<?php

namespace awr\services;

use awr\models\CommonModel as CommonModel;

class CommonService {

	/* For Singleton Pattern */
    private static $_instance = null;
    private function __construct() {  
    }
 
    public static function get_instance() {
 
        if(is_null(self::$_instance)) {
            self::$_instance = new CommonService();  
        }

        return self::$_instance;
    }

    public function get_show_notifications () {
        return CommonModel::get_instance()->get_show_notifications();  
    }

    public function save_hidden_video ( $video ) {
        return CommonModel::get_instance()->save_hidden_video($video);  
    }

    public function get_hidden_videos (  ) {
        return CommonModel::get_instance()->get_hidden_videos();  
    }
    
    public function show_notifications( $show ) {
        return CommonModel::get_instance()->show_notifications( $show );
    }
    
    public function save_hidden_bloc ($bloc_id, $hidden) {
        return CommonModel::get_instance()->save_hidden_bloc ($bloc_id, $hidden);
    }
    
    public function get_hidden_blocs () {
        return CommonModel::get_instance()->get_hidden_blocs ();
    }
	
    public function get_system_infos () {
        return CommonModel::get_instance()->get_system_infos ();
    }

    public function save_nav ( $nav_anchor ) {
        return CommonModel::get_instance()->save_nav ( $nav_anchor );
    }

    public function get_nav () {
        return CommonModel::get_instance()->get_nav ();
    }

    public function get_current_banner_infos ( $medium = "banners" ) {
        
        $banners = CommonModel::get_instance()->get_banners_of_today ();

        //$current_banner = AWR_PP_INFOS[$current_banner_index];

        if ( !$banners || count($banners) == 0 )
            return null;

        $current_banner = array();
        if ( count($banners) > 0 )
            $current_banner = $banners[0];


        $utm_campaign = 'ongoing';
        $utm_source = 'free_plugin';
        // the remaining vars are definied in their locations, banners, popup, etc.

        // Right banner
        $banner_utm_medium  = $medium;
        $banner_utm_content = $current_banner['code'];

        $link = AWR_PLUGIN_UPGRADE_URL . '?utm_campaign=' . $utm_campaign . '&utm_source=' . $utm_source . '&utm_medium=' . $banner_utm_medium . '&utm_content=' . $banner_utm_content; 

        $img = AWR_PLUGIN_IMG_URL . '/' . $current_banner['img'];
        $text = $current_banner['text'];
        $offer = $current_banner['offer'];
        $offer_message = $current_banner['offer_message'];

        return array (
            'link' => $link,
            'img' => $img,
            'text' => $text,
            'offer' => $offer,
            'offer_message' => $offer_message,
        );
    }

}