<?php 

/**
 * The tag archive
 *
 * @package huhu
 * @since 0.1
 */

get_header(); ?>

<main id="primary" class="site-content">

	<header class="tag-header">

		<div class="tag-title">Schlagwort:
		<?php single_tag_title( ); ?>
		</div>
		<div class="tag-description">
		<?php echo tag_description( ); ?>
		</div>	

	</header>

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
		<div class="entry-content">
		<?php 
		if(is_post_type('pinseldisko')) {
			echo '<p>';
			the_sketchnote_description();
			echo '</p>'; ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('thumb'); ?></a>
			<?php
		} elseif (is_post_type('raketenstaub')) {
			?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('thumb'); ?></a>
			<?php
		} else { 
			the_excerpt();
		} ?>
		</div>

		<?php /* Date */ ?>
		<footer class="entry-date published">
		<?php echo get_the_date(); ?>
		<?php get_template_part( 'microformats' ) ?>
		</footer>

		</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>