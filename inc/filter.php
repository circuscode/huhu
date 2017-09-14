<?php

/**
 * Filter
 *
 * @package huhu
 * @since 0.1
 */

// Remove WP JSON @ Head
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// Podlove String Filter
function huhu_podlove_filter_content_string($content) {
	
	$podlove_string_toberemoved='<li>Download:</li>';
	$podlove_string_tobeadded='';
	$content=str_replace($podlove_string_toberemoved, $podlove_string_tobeadded, $content);
					  
	return $content;
}
add_filter('the_content', 'huhu_podlove_filter_content_string', 99);

// Podlove Style Filter
function huhu_podlove_filter_content_style($content) {
	
	$podlove_string_toberemoved='<style type="text/css">
.podlove-contributors-table .avatar_cell {
	width: 60px;
}

.podlove-contributors-table .title_cell {
	line-height: 1em;
}

.podlove-contributors-table .social_cell a, .podlove-contributors-table .donation_cell a {
	margin-right: 4px;
	background: none;
	text-decoration: none;
    box-shadow: none;
}

.podlove-contributors-table a {
	border: 0;
}

.podlove-contributors-table a img {
	display: inline;
}

.podlove-contributors-table .flattr_cell iframe {
	margin-bottom: 0px;
}

.podlove-contributors-table td {
	vertical-align: middle;
}
</style>';
	$podlove_string_tobeadded='';
	$content=str_replace($podlove_string_toberemoved, $podlove_string_tobeadded, $content);
					  
	return $content;
}
add_filter('the_content', 'huhu_podlove_filter_content_style', 99);

?>