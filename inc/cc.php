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
	
	echo '<a class="license-image" href="'.huhu_creative_commons_link($id).'">';
	echo '<img src="'.$huhu_theme_url.'/assets/creativecommons.png" width="500" height="119" alt="Creative Commons"/>';
	echo '</a>';
	
}

function huhu_creative_commons_ccby_logo($id) {

	$huhu_theme_url=get_template_directory_uri();
	
	echo '<a class="license-image" href="'.huhu_creative_commons_link($id).'">';
	echo '<img src="'.$huhu_theme_url.'/assets/cc-by.png" width="200" height="101" alt="Creative Commons CC-BY"/>';
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
		echo '<a href="'.huhu_creative_commons_link($id).'">Creative Commons CC-BY 4.0</a>';
	}
	
}

function huhu_creative_commons_general_string($id) {

	$cc_type=null;

	if (function_exists('get_field')) { 
		$cc_type = get_field( "licence_type");
	} else { 
		$cc_type = get_post_meta( $id, 'licence_type', true);
	} 

	if ($cc_type=='CC-BY' OR $cc_type=='cc-by') {
		echo '<a href="'.huhu_creative_commons_link($id).'">Creative Commons</a>';
	}
	
}

function huhu_creative_commons_excluded_content($id) {

	$cc_exclude=null;

	if (function_exists('get_field')) { 
		$cc_exclude = get_field( "licence_exclude");
	} else { 
		$cc_exclude = get_post_meta( $id, 'licence_exclude', true);
	} 

	if( $cc_exclude == true ) {

		$cc_exclude = ucwords ($cc_exclude);
		$cc_last_media_with_komma = strrchr($cc_exclude, ",");
		$cc_last_media_with_and = str_replace(",", " und", $cc_last_media_with_komma); 
		$cc_exclude_string= str_replace($cc_last_media_with_komma, $cc_last_media_with_and, $cc_exclude);
		$cc_exclude_string= "<br/>".$cc_exclude_string . " ausgeschlossen."; 
	
		echo $cc_exclude_string;
	} 

}

function huhu_creative_commons_link($id) {

	$cc_version=null;
	$cc_type=null;
	$cc_by=false;

	if (function_exists('get_field')) { 
		$cc_version = get_field( "licence_version");
	} else { 
		$cc_version = get_post_meta( $id, 'licence_version', true);
	} 

	if (function_exists('get_field')) { 
		$cc_type = get_field( "licence_type");
	} else { 
		$cc_type = get_post_meta( $id, 'licence_type', true);
	} 

	if($cc_type=='CC-BY' OR $cc_type=='cc-by') {
		$cc_by = true;
	}
	 
	if ($cc_version=='4' AND $cc_by == true) {
		return 'https://creativecommons.org/licenses/by/4.0/deed.de';
	}

}

?>