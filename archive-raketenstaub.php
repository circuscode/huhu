<?php 

/**
 * The template for Raketenstaub archive
 *
 * @package huhu
 * @since 0.3
 */

get_header(); ?>

<main id="primary" class="site-content">

<?php 	

	// Start the Loop.

	while ( have_posts() ) : the_post(); ?>

		<article class="image-rocket" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php /* Thumbnail */ ?>
		<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail('rocket_thumb'); ?></a>
		</div>

		<?php /* Date */ ?>
		<footer class="entry-date published">
		<?php get_template_part( 'microformats' ) ?>
		</footer>

		</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>