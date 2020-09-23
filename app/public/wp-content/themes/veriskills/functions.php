<?php
/*
@package: wwd blankslate
*/
$cache_buster_version = '0.0.1';
require get_template_directory() . '/inc/theme-support.php';
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce-support.php';
}

function wwd_load_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, '3.3.1', true);

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Francois+One|Alegreya+Sans+SC|Dancing+Script', array(), '1.0', 'all');
    wp_enqueue_style('icon-fonts', get_template_directory_uri() . '/css/line-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lite-yt-css', get_template_directory_uri() . '/css/lite-yt-embed.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('wwd-core-css', get_template_directory_uri() . '/css/style.min.css', array(), $cache_buster_version, 'all');

    //  I have moved away from this library
    // wp_enqueue_script('fitvids', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    wp_enqueue_script('fitvids', get_stylesheet_directory_uri() . '/js/lite-yt-embed.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wwd-core-js', get_template_directory_uri() . '/js/core.min.js', array('jquery'), $cache_buster_version, true);
}
add_action('wp_enqueue_scripts', 'wwd_load_scripts');

function wwd_custom_post_types() {
    if (function_exists('wwd_generic_taxonomy')) {
        wwd_generic_taxonomy('builder-component', 'Component Locations', 'builder-component', array('layout'));
    }

    if (function_exists('wwd_add_custom_post')) {
        wwd_add_custom_post('layout', 'Layout Builder', 'Layout Builders', 'dashicons-book-alt', array('post'));
    }
}
add_action('init', 'wwd_custom_post_types');