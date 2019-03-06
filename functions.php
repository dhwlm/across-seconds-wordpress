<?php
/*
*
* please include files in alphabetical order
*
*/
include_once('inc/rebranding.php');
include_once('inc/remove-junk.php');
include_once('inc/rest-api.php');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

add_filter( 'wpcf7_validate_configuration', '__return_false' );

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_home() && is_front_page() ) {
        $classes[] = 'welcome-anime';
    }
    return $classes;
}

function add_theme_scripts() {

  wp_enqueue_style( 'style', get_stylesheet_uri(),array(),filemtime( get_stylesheet_directory() . '/style.css' ) );

  wp_register_script('easing', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array('jquery'),'1.1', true);
  wp_register_script('anime', get_template_directory_uri() . '/assets/js/vendor/anime.min.js', array(),'1.1', true);
  wp_register_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery','easing','anime'),'1.1', true);
  wp_enqueue_script('app');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


?>
