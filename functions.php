<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maxbatchelder
 * @subpackage maxbatcheldertest
 * @version 1.0
 */
 
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */




if (! function_exists( "maxbatcheldertest_setup" )) :
	function maxbatcheldertest_setup() {
		add_theme_support( 'post-thumbnails' );		
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
endif;
add_action( "after_setup_theme", "maxbatcheldertest_setup" );


function register_my_menus() {
	register_nav_menus( array( "headermenu" => __( "Header Menu") ) );
}
add_action( "init", "register_my_menus" );


?>