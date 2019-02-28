<?php

/**
 * CC
 *
 * @package huhu
 * @since 0.6
 */

function huhu_creative_commons_logo() {

	$huhu_theme_url=get_template_directory_uri();
	
	echo '<a href="'.huhu_creative_commons_link().'">';
	echo '<img src="'.$huhu_theme_url.'/assets/creativecommons.png" width="500" height="119" alt="Creative Commons"/>';
	echo '</a>';
	
}

function huhu_creative_commons_link() {

	$this_version=null;

	if (function_exists('get_field')) { 
		$this_version = get_field( "licence_version");
	} else { 
		$this_version = get_post_meta( get_the_ID(), 'licence_version');
	} 
	 
	if ($cc_version=='4') {
		return 'https://creativecommons.org/licenses/by/4.0/deed.de';
	}
	
}

?>