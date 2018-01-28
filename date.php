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

		<div class="date-description">
		<?php 
		
		if ( is_month() ) {
			echo 'Alle Beiträge vom ';
			echo get_the_date( 'F Y' );
		}
		elseif ( is_year() ) {
			echo 'Alle Beiträge des Jahres ';
			echo get_the_date( 'Y' );
		}
		elseif ( is_day() ) {
			echo 'Alle Beiträge, welche am ';
			echo get_the_date( );
			echo ' veröffentlicht wurden';
		}
		
		?>
		</div>

	</header>

	<?php 

	// Start the Loop.

	while ( have_posts() ) : the_post(); ?>

		<?php 
		$format = get_post_format( $post_id ); 
		if($format!='quote' && $format!='image') {
		?>

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
				the_excerpt();
				?>
	
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('mini'); ?></a>
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

		<?php } ?>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>