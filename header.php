<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maxbatchelder
 * @subpackage maxbatcheldertest
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="sitewrapper">
<div class="blogheader">
	<div id="blogtitle"><?php bloginfo( "name" ) ?></div>
	<?php wp_nav_menu( array( "theme_location" => "headermenu" ) ); ?>
</div>
<div class="line"></div>
<div id="contentwrapper">