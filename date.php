<?php 

/**
 * The date archive
 *
 * @package huhu
 * @since 0.2
 */

get_header(); ?>

<main id="primary" class="site-content">

	<header class="date-header">

		<div class="date-title">
		<?php 
		
		if ( is_month() ) {
			echo 'Monat: ';
			echo get_the_date( 'F Y' );
		}
		elseif ( is_year() ) {
			echo 'Jahr: ';
			echo get_the_date( 'Y' );
		}
		elseif ( is_day() ) {
			echo 'Datum: ';
			echo get_the_date( );
		}
		
		?>
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
			echo '</p>';
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