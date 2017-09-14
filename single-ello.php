<?php

/**
 * The template single zimtwolke
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

        <div class="entry-content">
        <?php the_content(); ?>
        </div>

        <footer class="entry-footer">

        <?php get_template_part( 'meta' ) ?>
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