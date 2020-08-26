<?php

/**
 * Theme Logic
 *
 */

/*
Setup
*/

function huhu_setup() {

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu().
	register_nav_menus( array ( 'primary' => __( 'Primary menu', 'huhu' ), ) );

	// This theme uses post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'quote', 'image' ) );

	// Enable HTML5 Search Form
	add_theme_support( 'html5', array( 'search-form' ) );
	
}
add_action( 'after_setup_theme', 'huhu_setup' );

/*
Scripts
*/

function huhu_scripts() {

	global $wp_styles;

	/* Styles 

	wp_register_style( 'style-beta', get_template_directory_uri().'/style-beta.css' ) ;

	$huhu_style_version=get_option('huhu_style_version');

	if($huhu_style_version==1) {
	wp_enqueue_style( 'style-beta' );
	}
	else {
	wp_enqueue_style( 'huhu-style', get_stylesheet_uri(), array(), '001' );
	} */

	wp_enqueue_style( 'huhu-style', get_stylesheet_uri(), array(), '001' );

	wp_enqueue_script( 'huhu-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), '1.1', true );

	wp_enqueue_script( 'huhu-script', get_template_directory_uri() . '/js/huhu.js', array( 'jquery' ), '001', true );

}
add_action( 'wp_enqueue_scripts', 'huhu_scripts' );

/*
Content Width
*/

if ( ! isset( $content_width ) ) {
    $content_width = 700;
}

function huhu_adjust_content_width() {

    global $content_width;
    if ( is_page_template( 'full-width.php' )  )
    $content_width = 1300;
	
	if ( is_front_page()  )
    $content_width = 960;

}
add_action( 'template_redirect', 'huhu_adjust_content_width' );

/*
Conditional Tags
*/

function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

/*
Body Classes
*/

function huhu_body_class( $classes ) {

	if ( is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'template-fullwidth';

	return $classes;
}
add_filter( 'body_class', 'huhu_body_class' );

/*
Template Tags
*/

function the_sketchnote_description () {
		global $post;
		$sketchnote_description=get_post_meta($post->ID, 'pinseldisko_sketchnote_description', true);
		echo $sketchnote_description;
}

/*
Comments
*/

function huhu_comments($comment, $args, $depth){

	//checks if were using a div or ol|ul for our output
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

	?>

	<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $args['has_children'] ? 'parent' : '', $comment ); ?>>

		<article id="comment-<?php comment_ID(); ?>" class="comment">

			<div class="comment-avatar">
				<?php echo get_avatar( $comment, 80 ); ?>
			</div>

				<p class="comment-details cf">
					<?php comment_author_link(); ?>
					<span class="comment-time"><?php comment_date( ); ?></span>
				</p><!-- end .comment-details -->

			<div class="comment-text">
			<?php comment_text(); ?>
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'suidobashi' ); ?></p>
				<?php endif; ?>
			</div><!-- end .comment-text -->

		</article><!-- end .comment -->

	<?php
}

/*
More to the Top
*/

/*
Version:      1.1.0
Description:  A very simple plugin that makes the <code>&lt;!--more--&gt;</code> link not scroll down when viewing the rest of the post.
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/
*/

function huhu_moretothetop( $content ) {

	global $post;
	return str_replace( array( '#more-' . $post->ID . '"', '<span id="more-' . $post->ID . '"></span>' ), array( '"', '' ), $content);

}
add_filter( 'the_content', 'huhu_moretothetop' );

/*
Image Size
*/

// See Excel File as reference

add_image_size('extra_large', 1300, 0, false);
function huhu_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'extra_large' => __( 'Extra Groß' ),
    ) );
}
add_filter( 'extra_large', 'huhu_custom_sizes' );

add_image_size('rocket_thumb', 250, 250, true);
function huhu_custom_size_rocket( $sizes ) {
    return array_merge( $sizes, array(
        'rocket_thumb' => __( 'Raketenstaub Archiv' ),
	) );
}
add_filter( 'rocket_thumb', 'huhu_custom_size_rocket' );

add_image_size('huhu_wp_medium', 300, 300, false);
function huhu_wp_standard_medium( $sizes ) {
    return array_merge( $sizes, array(
        'huhu_wp_medium' => __( 'WP Standard Medium' ),
	) );
}
add_filter( 'huhu_wp_medium', 'huhu_wp_standard_medium' );

add_image_size('huhu_wp_large', 1024, 1024, false);
function huhu_wp_standard_large( $sizes ) {
    return array_merge( $sizes, array(
        'huhu_wp_large' => __( 'WP Standard Large' ),
	) );
}
add_filter( 'huhu_wp_large', 'huhu_wp_standard_large' );

/*
Options Menu
*/

function huhu_options_menu() {
    add_theme_page("huhu Options", "Options", "manage_options", "theme-options", "huhu_theme_option_page", null, 99);
}

add_action( 'admin_menu', 'huhu_options_menu');

/*
Options Page
*/

function huhu_theme_option_page() {
	echo '
	<div class="wrap">
	<h1>Options › huhu</h1>
	<p class="huhu_settings">All Settings<br/>&nbsp;</p>
	
	<form method="post" action="options.php">';
	
	do_settings_sections( 'huhu-options' );
	settings_fields( 'huhu_settings' );
	submit_button();

	echo '</form></div><div class="clear"></div>';
	};

/*
Fields
#*/

function huhu_options_display_style_version()
{
	echo '<input class="regular-text" type="text" name="huhu_style_version" id="huhu_style_version" value="'. get_option('huhu_style_version') .'"/>';
}

/* 
Sections
*/

function huhu_options_display_basic_description()
{ echo '<p>Basic Settings</p>'; }

// Theme Basic Settings 

function huhu_options_basic_display()
{
	
	add_settings_section("basic_settings_section", "Theme", "huhu_options_display_basic_description", "huhu-options");
	
	add_settings_field("huhu_style_version", "Example Setting", "huhu_options_display_style_version", "huhu-options", "basic_settings_section");

	register_setting("huhu_settings", "huhu_style_version", "huhu_style_version");

}
add_action("admin_init", "huhu_options_basic_display");

/* Validate Input: Style */

function huhu_style_version ( $style ) {
    
    $output = $style;
    return $output;

} 

/*
Load
*/

require( get_template_directory() . '/inc/filter.php' );
require( get_template_directory() . '/inc/shortcodes.php' );
require( get_template_directory() . '/inc/widgets.php' );
require( get_template_directory() . '/inc/cc.php' );

?>