<?php

/**
 * The template for pages
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

        <?php get_template_part( 'microformats' ) ?>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>