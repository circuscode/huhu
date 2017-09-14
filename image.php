<?php

/**
 * The template single posts
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

        <?php /* Caption */ ?>
        <div class="image-description">
        <p>
        <?php 
        $image = get_post(get_the_ID());
        $image_caption = $image->post_excerpt;
        echo $image_caption;
        ?>
        </p>
        </div>

        <?php /* Image */ ?>
        <div>
        <a href="<?php echo esc_url(wp_get_attachment_url()); ?>" target="_blank">
        <?php 
        $image_size = apply_filters( 'wporg_attachment_size', 'large' ); 
        echo wp_get_attachment_image( get_the_ID(), $image_size ); 
        ?>
        </a>
        </div>

        </div> 

        <footer class="entry-footer">

        <?php get_template_part( 'meta' ) ?>
        <?php get_template_part( 'about' ) ?>

        </footer>

        </article>

        <?php

    endwhile;
    ?>

</main>

<?php get_footer(); ?>