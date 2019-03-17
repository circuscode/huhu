<?php

/**
 * CC
 *
 * @package huhu
 * @since 0.6
 */

function huhu_is_creative_commons($id) {

	$cc_type=null;

	if (function_exists('get_field')) { 
		$cc_type = get_field( "licence_type");
	} else { 
		$cc_type = get_post_meta( $id, 'licence_type', true);
	} 

	if($cc_type=='CC-BY' OR $cc_type=='cc-by') {
		return true;
	}
	else if ($cc_type=='Null') {
		return false;
	}
	else {
		return false;
	}

}

function huhu_creative_commons_logo($id) {

	$huhu_theme_url=get_template_directory_uri();
	
	echo '<a href="'.huhu_creative_commons_link($id).'">';
	echo '<img src="'.$huhu_theme_url.'/assets/creativecommons.png" width="500" height="119" alt="Creative Commons"/>';
	echo '</a>';
	
}

function huhu_creative_commons_license_type_string($id) {

	$cc_type=null;

	if (function_exists('get_field')) { 
		$cc_type = get_field( "licence_type");
	} else { 
		$cc_type = get_post_meta( $id, 'licence_type', true);
	} 

	if ($cc_type=='CC-BY' OR $cc_type=='cc-by') {
		echo '<a href="'.huhu_creative_commons_link($id).'">CC-BY 4.0</a><br/>';
	}
	
}

function huhu_creative_commons_link($id) {

	$cc_version=null;

	if (function_exists('get_field')) { 
		$cc_version = get_field( "licence_version");
	} else { 
		$cc_version = get_post_meta( $id, 'licence_version', true);
	} 
	 
	if ($cc_version=='4') {
		return 'https://creativecommons.org/licenses/by/4.0/deed.de';
	}
	
}

?>