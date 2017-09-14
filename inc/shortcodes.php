<?php

/**
 * Shortcoces
 *
 * @package huhu
 * @since 0.1
 */

// Enable shortcodes in widget areas
add_filter( 'widget_text', 'do_shortcode' );

// Replace WP autop formatting
if (!function_exists( "huhu_remove_wpautop")) {
	function huhu_remove_wpautop($content) {
		$content = do_shortcode( shortcode_unautop( $content ) );
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
		return $content;
	}
}

/* 
Columns
*/

function huhu_shortcode_two_columns_one( $atts, $content = null ) {
   return '<div class="two-columns-one">' . huhu_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'huhu_shortcode_two_columns_one' );

function huhu_shortcode_two_columns_one_last( $atts, $content = null ) {
   return '<div class="two-columns-one last">' . huhu_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one_last', 'huhu_shortcode_two_columns_one_last' );

function huhu_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'huhu_shortcode_divider' );

/*
Boxes
*/

function huhu_shortcode_white_box($atts, $content = null) {
   return '<div class="white-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'white_box', 'huhu_shortcode_white_box' );

function huhu_shortcode_yellow_box($atts, $content = null) {
   return '<div class="yellow-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'yellow_box', 'huhu_shortcode_yellow_box' );

function huhu_shortcode_red_box($atts, $content = null) {
   return '<div class="red-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'red_box', 'huhu_shortcode_red_box' );

function huhu_shortcode_blue_box($atts, $content = null) {
   return '<div class="blue-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'blue_box', 'huhu_shortcode_blue_box' );

function huhu_shortcode_orange_box($atts, $content = null) {
   return '<div class="orange-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'orange_box', 'huhu_shortcode_orange_box' );

function huhu_shortcode_green_box($atts, $content = null) {
   return '<div class="green-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'green_box', 'huhu_shortcode_green_box' );

function huhu_shortcode_grey_box($atts, $content = null) {
   return '<div class="grey-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'grey_box', 'huhu_shortcode_grey_box' );

function huhu_shortcode_dark_box($atts, $content = null) {
   return '<div class="dark-box">' . do_shortcode( huhu_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'dark_box', 'huhu_shortcode_dark_box' );

/* 
Buttons
*/

function huhu_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'	=> '#',
    'target' => '',
    'color'	=> '',
    'size'	=> '',
	 'form'	=> '',
	 'font'	=> '',
    ), $atts));

	$color = ($color) ? ' '.$color. '-btn' : '';
	$size = ($size) ? ' '.$size. '-btn' : '';
	$form = ($form) ? ' '.$form. '-btn' : '';
	$font = ($font) ? ' '.$font. '-btn' : '';
	$target = ($target == 'blank') ? ' target="_blank"' : '';

	$out = '<a' .$target. ' class="standard-btn' .$color.$size.$form.$font. '" href="' .$link. '"><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'huhu_button');

?>