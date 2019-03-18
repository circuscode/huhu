<?php

/**
 * The template single pinseldisko
 *
 * @package huhu
 * @since 0.1
 */

get_header(); ?>

<main id="primary" class="site-content">

    <?php

    // Start the Loop.
    while ( have_posts() ) : the_post();  ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <?php /* Thumbnail */ ?>
        <div class="entry-thumbnail">
        <?php the_post_thumbnail('extra-large'); ?>
        </div>

        <div class="entry-content">
        <?php the_content(); ?>
        </div>

        <?php get_template_part( 'meta' ) ?>
        
        <div class="raketenstaub-nav">
        <div class="rocket-prev"><?php previous_post_link('%link','< Vorheriges Bild'); ?>
        <?php if(get_next_post() AND get_previous_post() ){echo '&nbsp;&nbsp;|&nbsp;&nbsp;';} ?>
        <?php next_post_link('%link','Nächstes Bild >'); ?></div>
        </div>

        <footer class="entry-footer">

        <?php get_template_part( 'about' ) ?>

        </footer>

        </article>

        <?php
    
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }

    endwhile;
    ?>

</main>

<?php get_footer(); ?>