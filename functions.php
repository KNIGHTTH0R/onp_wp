<?php

if(!function_exists('onp_setup')) :
    function onp_setup(){
        // Let wp handels the title tags.
        add_theme_support('title_tags');
    }

endif;
add_action('after_setup_theme', 'onp_setup');

// Register Menus

function register_onp_menus(){
  register_nav_menus(
            array('primary' => __('Primary Menu') )
  );
}
add_action('init', 'register_onp_menus');

// Add Style Sheets

function onp_scripts(){
    // Enqueue Main Stylesheet
    wp_enqueue_style('onp_styles', get_stylesheet_uri() );

    // Enqueue google and other Stylesheet
    wp_enqueue_style('onp_google_fonts', 'http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
    wp_enqueue_style('onp_normalize_fonts', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('onp_main_fonts', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('onp_main_fonts', get_template_directory_uri().'/css/youtubeVideo.css');
}
add_action('wp_enqueue_scripts', 'onp_scripts');
