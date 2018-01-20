<?php

/**
 * The embed template
 *
 * @package huhu
 * @since 0.2
 */

get_header( 'embed' );

if ( have_posts() ) :

	while ( have_posts() ) : the_post();
		get_template_part( 'embed', 'content' );
	endwhile;
	
else :
	get_template_part( 'embed', '404' );
endif;

get_footer( 'embed' );
