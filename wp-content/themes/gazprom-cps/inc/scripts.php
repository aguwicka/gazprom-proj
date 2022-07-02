<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'gazprom_styles' );
function gazprom_styles() {
    wp_enqueue_style('slick-styles', get_template_directory_uri() . '/assets/js/slick/slick.css', array() , null, 'all');
    wp_enqueue_style('lightbox-styles', get_template_directory_uri() . '/assets/style/lightbox.css', array() , null, 'all');
    wp_enqueue_style('app-styles', get_template_directory_uri() . '/assets/style/styles.css', array() , null, 'all');
}

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null, true);
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'gazprom_scripts' );
function gazprom_scripts() {
    wp_enqueue_script('slick-script' , get_template_directory_uri() . '/assets/js/slick/slick.js', array(), null, true);
    wp_enqueue_script('lightbox' , get_template_directory_uri() . '/assets/js/lightbox.js', array(), null, true);
    wp_enqueue_script('app' , get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
}


#thunbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}