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

        <?php

        $mathilda_subpage=mathilda_which_page();
        $title_suffix;

        if($mathilda_subpage==1) {
                $title_suffix='';
        }
        else {
                $title_suffix=' - Seite '.$mathilda_subpage;
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