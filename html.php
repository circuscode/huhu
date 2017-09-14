<?php 

/**
 * The html header
 *
 * @package huhu
 * @since 0.1
 */

 ?><!DOCTYPE html>

<html <?php language_attributes('html'); ?>>

<head>
	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

    <?php wp_head(); ?>

</head>