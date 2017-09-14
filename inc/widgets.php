<?php

/**
 * Widgets
 *
 * @package huhu
 * @since 0.1
 */

function huhu_podlove_widget_area_init() {
	
	register_sidebar( array(
		'name'          => __( 'Podcast', 'huhu' ),
		'id'            => 'podcast-widget',
		'description'   => __( 'Widget Area', 'huhu' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s podcast-widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="podcast-widget-title">',
		'after_title'   => '</div>',
	) );
	
}
add_action( 'widgets_init', 'huhu_podlove_widget_area_init' );

?>