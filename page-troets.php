<?php

/**
 * The template for page toots
 *
 * @package huhu
 * @since 0.7
 */

get_header(); ?>

<main id="primary" class="site-content">

    <?php

    // Start the Loop.
    while ( have_posts() ) : the_post();  ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php

        $title_suffix='';

        if(function_exists('tootpress_activate')) {

            $tootpress_page=tootpress_get_query_var();

            if(!$tootpress_page==1) {
                    $title_suffix=' - Seite '.$tootpress_page;
            }

        }

        ?>

        <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); echo $title_suffix ?></h1>
        </header>

        <div class="entry-content">
        <?php the_content(); ?>
        </div>

        <?php get_template_part( 'microformats' ) ?>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>