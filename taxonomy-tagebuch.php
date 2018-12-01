<?php 

/**
 * The tagebuch taxonomy archive
 *
 * @package huhu
 * @since 0.5
 */

get_header(); ?>

<main id="primary" class="site-content">

	<header class="tax-header">

		<div class="tax-title">Tagebucht:
		<?php single_tag_title( ); ?>
		</div>
		<div class="tax-description">
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

			the_excerpt();
		
		?>
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