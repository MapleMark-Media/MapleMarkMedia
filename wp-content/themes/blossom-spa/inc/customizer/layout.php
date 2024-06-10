<?php
/**
 * Layout Settings
 *
 * @package Blossom_Spa
 */

function blossom_spa_customize_register_layout( $wp_customize ) {
    
    /** Layout Settings */
    $wp_customize->add_panel( 
        'layout_settings',
         array(
            'priority'    => 30,
            'capability'  => 'edit_theme_options',
            'title'       => __( 'Layout Settings', 'blossom-spa' ),
            'description' => __( 'Change different page layout from here.', 'blossom-spa' ),
        ) 
    );

    /** Header Layout Section */

    $wp_customize->add_section(
        'header_layout_settings',
        array(
            'title'    => __( 'Header Layout', 'blossom-spa' ),
            'priority' => 10,
            'panel'    => 'layout_settings',
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'header_layout_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Note_Control( 
            $wp_customize,
            'header_layout_text',
            array(
                'section'     => 'header_layout_settings',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-spa' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-spa-pro/?utm_source=blossom_spa&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'header_layout_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'header_layout_settings',
            array(
                'section'     => 'header_layout_settings',
                'choices'     => array(
                    'one'       => get_template_directory_uri() . '/images/pro/header-layout.png',
                ),
            )
        )
    );

    /** Header Layout Section */

    /** Single Post Layout */

    $wp_customize->add_section(
        'single_layout_image_section',
        array(
            'title'    => __( 'Single Post Layout', 'blossom-spa' ),
            'panel'    => 'layout_settings',
            'priority' => 40,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'single_layout_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Note_Control( 
            $wp_customize,
            'single_layout_text',
            array(
                'section'     => 'single_layout_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-spa' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-spa-pro/?utm_source=blossom_spa&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'single_layout_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'single_layout_settings',
            array(
                'section'     => 'single_layout_image_section',
                'choices'     => array(
                    'one'       => get_template_directory_uri() . '/images/pro/single-layout.png',
                ),
            )
        )
    );

    /** Single Post Layout Ends */

    /** Blog Page Layout Settings */
    $wp_customize->add_section(
        'blog_layout',
        array(
            'title'    => __( 'Blog Page Layout', 'blossom-spa' ),
            'priority' => 40,
            'panel'    => 'layout_settings',
        )
    );
    
    /** Page Sidebar layout */
    $wp_customize->add_setting( 
        'blog_page_layout', 
        array(
            'default'           => 'list-layout',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'blog_page_layout',
            array(
                'section'     => 'blog_layout',
                'label'       => __( 'Blog Page Layout', 'blossom-spa' ),
                'description' => __( 'Choose the blog page layout for your site.', 'blossom-spa' ),
                'choices'     => array(
                    'list-layout'               => esc_url( get_template_directory_uri() . '/images/blog/listing.jpg' ),
                    'classic-layout'            => esc_url( get_template_directory_uri() . '/images/blog/classic.jpg' ),
                    'grid-layout'               => esc_url( get_template_directory_uri() . '/images/blog/grid.jpg' ),
                )
            )
        )
    );

    /** Blog Page Layout */

    /** Note */
    $wp_customize->add_setting(
        'blog_page_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Note_Control( 
            $wp_customize,
            'blog_page_text',
            array(
                'section'     => 'blog_layout',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-spa' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-spa-pro/?utm_source=blossom_spa&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'blog_page_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'blog_page_settings',
            array(
                'section'     => 'blog_layout',
                'choices'     => array(
                    'one'       => get_template_directory_uri() . '/images/pro/blog-layout.png',
                ),
            )
        )
    );

    /** Blog Page Layout Settings End */

    /** Home Page Layout Settings */
    $wp_customize->add_section(
        'general_layout_settings',
        array(
            'title'    => __( 'General Sidebar Layout', 'blossom-spa' ),
            'priority' => 55,
            'panel'    => 'layout_settings',
        )
    );
    
    /** Page Sidebar layout */
    $wp_customize->add_setting( 
        'page_sidebar_layout', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'page_sidebar_layout',
            array(
                'section'     => 'general_layout_settings',
                'label'       => __( 'Page Sidebar Layout', 'blossom-spa' ),
                'description' => __( 'This is the general sidebar layout for pages. You can override the sidebar layout for individual page in respective page.', 'blossom-spa' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'centered'      => esc_url( get_template_directory_uri() . '/images/1cc.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'post_sidebar_layout', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'post_sidebar_layout',
            array(
                'section'     => 'general_layout_settings',
                'label'       => __( 'Post Sidebar Layout', 'blossom-spa' ),
                'description' => __( 'This is the general sidebar layout for posts & custom post. You can override the sidebar layout for individual post in respective post.', 'blossom-spa' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'centered'      => esc_url( get_template_directory_uri() . '/images/1cc.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'layout_style', 
        array(
            'default'           => 'right-sidebar',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'layout_style',
            array(
                'section'     => 'general_layout_settings',
                'label'       => __( 'Default Sidebar Layout', 'blossom-spa' ),
                'description' => __( 'This is the general sidebar layout for whole site.', 'blossom-spa' ),
                'choices'     => array(
                    'no-sidebar'    => esc_url( get_template_directory_uri() . '/images/1c.jpg' ),
                    'left-sidebar'  => esc_url( get_template_directory_uri() . '/images/2cl.jpg' ),
                    'right-sidebar' => esc_url( get_template_directory_uri() . '/images/2cr.jpg' ),
                )
            )
        )
    );

    /** Home Page Layout Settings End */

    /** Pagination Settings */

    $wp_customize->add_section(
        'pagination_image_section',
        array(
            'title'    => __( 'Pagination Settings', 'blossom-spa' ),
            'panel'    => 'layout_settings',
            'priority' => 60,
        )
    );

    /** Note */
    $wp_customize->add_setting(
        'pagination_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post' 
        )
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Note_Control( 
            $wp_customize,
            'pagination_text',
            array(
                'section'     => 'pagination_image_section',
                'description' => sprintf( __( '%1$sThis feature is available in Pro version.%2$s %3$sUpgrade to Pro%4$s ', 'blossom-spa' ),'<div class="featured-pro"><span>', '</span>', '<a href="https://blossomthemes.com/wordpress-themes/blossom-spa-pro/?utm_source=blossom_spa&utm_medium=customizer&utm_campaign=upgrade_to_pro" target="_blank">', '</a></div>' ),
            )
        )
    );

   
    $wp_customize->add_setting( 
        'pagination_settings', 
        array(
            'default'           => 'one',
            'sanitize_callback' => 'blossom_spa_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Blossom_Spa_Radio_Image_Control(
            $wp_customize,
            'pagination_settings',
            array(
                'section'     => 'pagination_image_section',
                'choices'     => array(
                    'one'       => get_template_directory_uri() . '/images/pro/pagination.png',
                ),
            )
        )
    );

    /** Pagination Settings Ends */
}
add_action( 'customize_register', 'blossom_spa_customize_register_layout' );