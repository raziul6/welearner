<?php
/**
 * welearner Theme Customizer
 *
 * @package welearner
 */

function welen_customizer_settings( $wp_customizer ) {

    

    /**
     * Theme Color Settings Options
     */
    $wp_customizer->add_section( 'welen_theme_color', [
        'title'    => __( "Welearner Theme Color", "welearner" ),
        'priority' => 200,
    ] );

    //Slider Background Color
    $wp_customizer->add_setting( 'welen_theme_color_setings', [
        "default"   => "#3028af",
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( new WP_Customize_Color_Control( $wp_customizer, 'theme_color_ctrl', [
        "label"    => __( "Theme Color Color", "welearner" ),
        "section"  => 'welen_theme_color',
        "settings" => 'welen_theme_color_setings',
    ] ) );



    /**
     * Header Button Settings
     */
    $wp_customizer->add_section( 'welen_header_button', [
        'title'    => __( "Header Button", "welearner" ),
        'priority' => 200,
    ] );

    //Button One
    $wp_customizer->add_setting( 'welen_header_button_1', [
        "default"   => __( "Login", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_btn_1_control', [
        "label"    => __( "Button One Text", "welearner" ),
        "section"  => 'welen_header_button',
        "settings" => 'welen_header_button_1',
        "type"     => 'text',
    ] );
    $wp_customizer->add_setting( 'welen_header_button_url_1', [
        "default"   => "#",
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_btn_url_1_control', [
        "label"    => __( "Button One URL", "welearner" ),
        "section"  => 'welen_header_button',
        "settings" => 'welen_header_button_url_1',
        "type"     => 'URL',
    ] );

    //Button Two
    $wp_customizer->add_setting( 'welen_header_button_2', [
        "default"   => __( "Get Started", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_btn_2_control', [
        "label"    => __( "Button Tow Text", "welearner" ),
        "section"  => 'welen_header_button',
        "settings" => 'welen_header_button_2',
        "type"     => 'text',
    ] );
    $wp_customizer->add_setting( 'welen_header_button_url_2', [
        "default"   => "#",
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_btn_url_2_control', [
        "label"    => __( "Button One URL", "welearner" ),
        "section"  => 'welen_header_button',
        "settings" => 'welen_header_button_url_2',
        "type"     => 'URL',
    ] );

    //Button Two
    $wp_customizer->add_setting( 'welen_header_button_1', [
        "default"   => __( "Button One", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_slider_title_control', [
        "label"    => __( "Slider Title", "welearner" ),
        "section"  => 'welen_slider',
        "settings" => 'welen_slider_title',
        "type"     => 'text',
    ] );

    /**
     * Theme Slider Options
     */
    $wp_customizer->add_section( 'welen_slider', [
        'title'    => __( "Slider", "welearner" ),
        'priority' => 200,
    ] );

    //Slider Background Color
    $wp_customizer->add_setting( 'welen_slider_bg_color_setings', [
        "default"   => "#3028AF",
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( new WP_Customize_Color_Control( $wp_customizer, 'slide_bg_clr', [
        "label"    => __( "Slider Background Color", "welearner" ),
        "section"  => 'welen_slider',
        "settings" => 'welen_slider_bg_color_setings',
    ] ) );

    //Slider Title One
    $wp_customizer->add_setting( 'welen_slider_title', [
        "default"   => __( "Discover a new way", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_slider_title_control', [
        "label"    => __( "Slider Title", "welearner" ),
        "section"  => 'welen_slider',
        "settings" => 'welen_slider_title',
        "type"     => 'text',
    ] );

    //Slider Title Two
    $wp_customizer->add_setting( 'welen_slider_title_two', [
        "default"   => __( "of learning", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_slider_title_two_control', [
        "label"    => __( "of learning", "welearner" ),
        "section"  => 'welen_slider',
        "settings" => 'welen_slider_title_two',
        "type"     => 'text',
    ] );

    //Slider Text
    $wp_customizer->add_setting( 'welen_slider_text', [
        "default"   => __( "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque.

", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_slider_text_control', [
        "label"    => __( "Slider Text", "welearner" ),
        "section"  => 'welen_slider',
        "settings" => 'welen_slider_text',
        "type"     => 'textarea',
    ] );

    //Slider Image Upload
    $wp_customizer->add_setting( 'welen_slider_img', [
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'welen_upload_slide_img',
            array(
                'label'    => __( 'Upload Slider Image', 'welearner' ),
                'section'  => 'welen_slider',
                'settings' => 'welen_slider_img',
            )
        )
    );

    /**
     * Popular Topics Settings
     */
    $wp_customizer->add_section( 'welen_populer_topic_section', [
        'title'    => __( "Populer Topic", "welearner" ),
        'priority' => 200,
    ] );

    //Populer Topic Title
    $wp_customizer->add_setting( 'welen_populer_topic_heading', [
        "default"   => __( "Popular Topics", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_populer_topic_control', [
        "label"    => __( "Populer Topic Title", "welearner" ),
        "section"  => 'welen_populer_topic_section',
        "settings" => 'welen_populer_topic_heading',
        "type"     => 'text',
    ] );

    //Populer Topic Button Text
    $wp_customizer->add_setting( 'welen_populer_btn_text', [
        "default"   => __( "Show All", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_populer_topic_btn_control', [
        "label"    => __( "Button Text", "welearner" ),
        "section"  => 'welen_populer_topic_section',
        "settings" => 'welen_populer_btn_text',
        "type"     => 'text',
    ] );

    //Populer Topic Button URL
    $wp_customizer->add_setting( 'welen_populer_btn_url', [
        "default"   => __( "#", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_populer_topic_btn_url_control', [
        "label"    => __( "Button URL", "welearner" ),
        "section"  => 'welen_populer_topic_section',
        "settings" => 'welen_populer_btn_url',
        "type"     => 'URL',
    ] );

    /**
     * Trending Course Settings
     */
    $wp_customizer->add_section( 'welen_trending_section', [
        'title'    => __( "Trending", "welearner" ),
        'priority' => 200,
    ] );

    //Trending Title
    $wp_customizer->add_setting( 'welen_trending_heading', [
        "default"   => __( "Trending", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_trending_heading_control', [
        "label"    => __( "Trending Heading", "welearner" ),
        "section"  => 'welen_trending_section',
        "settings" => 'welen_trending_heading',
        "type"     => 'text',
    ] );

    //Trending Button Text
    $wp_customizer->add_setting( 'welen_trending_btn_text', [
        "default"   => __( "Show All", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_trending_btn_control', [
        "label"    => __( "Button Text", "welearner" ),
        "section"  => 'welen_trending_section',
        "settings" => 'welen_trending_btn_text',
        "type"     => 'text',
    ] );

    //Trending Topic Button URL
    $wp_customizer->add_setting( 'welen_trending_btn_url', [
        "default"   => __( "#", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_trending_btn_url_control', [
        "label"    => __( "Button URL", "welearner" ),
        "section"  => 'welen_trending_section',
        "settings" => 'welen_trending_btn_url',
        "type"     => 'URL',
    ] );

    /**
     * Top Rated Course Settings
     */
    $wp_customizer->add_section( 'welen_toprated_section', [
        'title'    => __( "Top Rated", "welearner" ),
        'priority' => 200,
    ] );

    //Trending Title
    $wp_customizer->add_setting( 'welen_toprated_heading', [
        "default"   => __( "Top Rated", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_toprated_heading_control', [
        "label"    => __( "Top Rated Heading", "welearner" ),
        "section"  => 'welen_toprated_section',
        "settings" => 'welen_toprated_heading',
        "type"     => 'text',
    ] );

    //Trending Button Text
    $wp_customizer->add_setting( 'welen_toprated_btn_text', [
        "default"   => __( "Show All", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_toprated_btn_control', [
        "label"    => __( "Button Text", "welearner" ),
        "section"  => 'welen_toprated_section',
        "settings" => 'welen_toprated_btn_text',
        "type"     => 'text',
    ] );

    //Trending Topic Button URL
    $wp_customizer->add_setting( 'welen_toprated_btn_url', [
        "default"   => __( "#", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_toprated_btn_url_control', [
        "label"    => __( "Button URL", "welearner" ),
        "section"  => 'welen_toprated_section',
        "settings" => 'welen_toprated_btn_url',
        "type"     => 'URL',
    ] );


    /**
     * Testimonial Settings Icon
     */
    $wp_customizer->add_section( 'welen_testimonial_section', [
        'title'    => __( "Testimonial Settings", "welearner" ),
        'priority' => 200,
    ] );

    //Testimonial Heading
    $wp_customizer->add_setting( 'welen_testimonial_title', [
        "default"   => __( "What our students have to say", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_cllogo_title_control', [
        "label"    => __( "Testimonial Title", "welearner" ),
        "section"  => 'welen_testimonial_section',
        "settings" => 'welen_testimonial_title',
        "type"     => 'text',
    ] );

    //Testimonial Text
    $wp_customizer->add_setting( 'welen_testimonial_text', [
        "default"   => __( "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_testimonial_text_control', [
        "label"    => __( "Testimonial Text", "welearner" ),
        "section"  => 'welen_testimonial_section',
        "settings" => 'welen_testimonial_text',
        "type"     => 'textarea',
    ] );


    /**
     * Client Logo Settings Icon
     */
    $wp_customizer->add_section( 'welen_cl_logo_section', [
        'title'    => __( "Client Logo Settings", "welearner" ),
        'priority' => 200,
    ] );

    //Client Loogo Text
    $wp_customizer->add_setting( 'welen_client_logo_text', [
        "default"   => __( "Trusted by content creators across the world", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_cllogo_text_control', [
        "label"    => __( "Client Logo Text", "welearner" ),
        "section"  => 'welen_cl_logo_section',
        "settings" => 'welen_client_logo_text',
        "type"     => 'text',
    ] );

    /**
     * Team Settings Icon
     */
    $wp_customizer->add_section( 'welen_team_section', [
        'title'    => __( "Team Settings", "welearner" ),
        'priority' => 200,
    ] );

    //Team Section Heading
    $wp_customizer->add_setting( 'welen_team_heading', [
        "default"   => __( "Our Popular Creator", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_team_heading_control', [
        "label"    => __( "Team Heading", "welearner" ),
        "section"  => 'welen_team_section',
        "settings" => 'welen_team_heading',
        "type"     => 'text',
    ] );

    //Team Section Heading
    $wp_customizer->add_setting( 'welen_team_text', [
        "default"   => __( "45+ million people are already learning on Welearners", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_team_text_control', [
        "label"    => __( "Team Text", "welearner" ),
        "section"  => 'welen_team_section',
        "settings" => 'welen_team_text',
        "type"     => 'textarea',
    ] );

    /**
     * Post Settings Icon
     */
    $wp_customizer->add_section( 'welen_post_section', [
        'title'    => __( "Post Settings", "welearner" ),
        'priority' => 200,
    ] );

    //Post Section Heading
    $wp_customizer->add_setting( 'welen_post_heading', [
        "default"   => __( "Learning Support features", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_post_heading_control', [
        "label"    => __( "Post Section Heading", "welearner" ),
        "section"  => 'welen_post_section',
        "settings" => 'welen_post_heading',
        "type"     => 'text',
    ] );

    //Post Item Count
    $wp_customizer->add_setting( 'welen_post_count', [
        "default"   => 3,
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_post_count_control', [
        "label"    => __( "Post Count", "welearner" ),
        "section"  => 'welen_post_section',
        "settings" => 'welen_post_count',
        "type"     => 'text',
    ] );

    //Post Read More Button Text
    $wp_customizer->add_setting( 'welen_post_readmore_text', [
        "label"     => __( "Read Blog", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_post_readmore_text_control', [
        "label"    => __( "Read More text", "welearner" ),
        "section"  => 'welen_post_section',
        "settings" => 'welen_post_readmore_text',
        "type"     => 'text',
    ] );

    /**
     * Social Icon
     */
    $wp_customizer->add_section( 'welen_social_cion_section', [
        'title'    => __( "Social Icon", "welearner" ),
        'priority' => 200,
    ] );

    //Facebook
    $wp_customizer->add_setting( 'welen_fb_icon_heading', [
        "default"   => __( "https://facebook.com", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_social_fb_control', [
        "label"    => __( "Facebook", "welearner" ),
        "section"  => 'welen_social_cion_section',
        "settings" => 'welen_fb_icon_heading',
        "type"     => 'URL',
    ] );

    //Twitter
    $wp_customizer->add_setting( 'welen_twi_icon_heading', [
        "default"   => __( "https://twitter.com", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_social_twi_control', [
        "label"    => __( "Twitter", "welearner" ),
        "section"  => 'welen_social_cion_section',
        "settings" => 'welen_twi_icon_heading',
        "type"     => 'URL',
    ] );

    //Linked Title
    $wp_customizer->add_setting( 'welen_link_icon_heading', [
        "default"   => __( "https://linkedin.com", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_social_link_control', [
        "label"    => __( "Linkedin", "welearner" ),
        "section"  => 'welen_social_cion_section',
        "settings" => 'welen_link_icon_heading',
        "type"     => 'URL',
    ] );

    //Instagram Title
    $wp_customizer->add_setting( 'welen_inst_icon_heading', [
        "default"   => __( "https://instagram.com", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_social_insta_control', [
        "label"    => __( "Instagram", "welearner" ),
        "section"  => 'welen_social_cion_section',
        "settings" => 'welen_inst_icon_heading',
        "type"     => 'URL',
    ] );

    //Instagram Title
    $wp_customizer->add_setting( 'welen_drib_icon_heading', [
        "default"   => __( "https://dribbble.com", "welearner" ),
        "transport" => "refresh",
    ] );
    $wp_customizer->add_control( 'welen_social_drib_control', [
        "label"    => __( "Dribbble", "welearner" ),
        "section"  => 'welen_social_cion_section',
        "settings" => 'welen_drib_icon_heading',
        "type"     => 'URL',
    ] );

}
add_action( 'customize_register', 'welen_customizer_settings' );
