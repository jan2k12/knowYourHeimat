<?php
/**
 * Heimat one_zero
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Heimat_one_zero
 * @subpackage heimat_one_zero
 * @since Heimat_one_zero 1.0
 */

/**
 * Table of Contents:
 * bootstrap
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'index-box-thumb', 150, 150 );

function addStylesAndScripts() {
	wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.bundle.js');
	wp_enqueue_style( 'my-main-style', get_stylesheet_uri(), [], '20200920', 'all' );


}

add_action( 'wp_enqueue_scripts', 'addStylesAndScripts' );


