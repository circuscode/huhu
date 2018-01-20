<?php

/**
 * The template zip attachment
 *
 * @package huhu
 * @since 0.2
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
        <?php the_content(); 
        
        $huhu_download_image=get_template_directory_uri();
        $huhu_download_image=$huhu_download_image.'/download.gif';

        ?>

        <a href=" <?php echo wp_get_attachment_url(); ?> " target="_blank">
        <img src="<?php echo $huhu_download_image; ?>" width="500" height="188" alt="Downloaad"/>
        </a>

        </div>

        <footer class="entry-footer">
        </footer>

        </article>

        <?php

    endwhile;
    ?>

</main>

<?php get_footer(); ?>