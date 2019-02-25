<?php 

/**
 * The template for pinseldisko archive
 *
 * @package huhu
 * @since 0.1
 */

get_header(); ?>

<main id="primary" class="site-content">

<?php 	

	// Start the Loop.

	while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php /* Headline */ ?>
		<header class="entry-header">
		<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php the_title(); ?>
		</a>
		</h2>
		</header>

		<?php /* Text */ ?>
		<div class="entry-summary">
		<?php the_field('pinseldisko_sketchnote_description'); ?>
		</div>

		<?php /* Thumbnail */ ?>
		<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail('medium'); ?></a>
		</div>

		<?php /* More Link */ ?>
		<span class="more-link">
		<a href="<?php the_permalink(); ?>">Anschauen</a>
		</span>

		<?php /* Date */ ?>
		<footer class="entry-date published">
		<?php echo get_the_date(); ?>
		<?php get_template_part( 'microformats' ) ?>
		</footer>

		</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>