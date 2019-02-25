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

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-content">

        <?php

        $image = get_field('pinseldisko_sketchnote_image');
        $size = 'full';

        echo '<p>';
        echo wp_get_attachment_image( $image, $size );
        echo '</p>';

        the_content();

        ?>

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