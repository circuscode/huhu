<?php 

/**
 * The podcast archive
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
		<div class="entry-intro">
		<?php the_content( 'Weiterlesen' );?>
		</div>

		<?php /* Date */ ?>
		<footer>
		<div class="entry-date published"><?php the_date(); ?></div>
		<?php get_template_part( 'microformats' ) ?>
		</footer>

	</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>