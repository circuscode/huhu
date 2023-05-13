<?php 

/**
 * The template for search results
 *
 * @package huhu
 * @since 0.1
 */

get_header(); ?>

<main id="primary" class="site-content">

<header class="search-results-header">
<div class="search-results-title">
<?php echo absint($wp_query->found_posts); ?> <?php printf( 'Suchergebnisse für %s', '<span class="searchterm">' . get_search_query() . '</span>' ); ?>
</div>
<div class="search-results-description">
Tröts sowie Tweets sind von der Suche ausgeschlossen.
</div>	
</header>

<?php 		

	if ( have_posts() ) :

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
				echo get_the_excerpt();
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

	<?php else : ?>

			<section class="no-results">

			<?php /* Headline */ ?>
			<header class="entry-header">
			<h2 class="entry-title">
			Nichts gefunden. :-(
			</h2>
			</header>

			<div class="entry-content">
			<p>Versuche es mal mit einem alternativen Suchbegriff.</p>
			</div>

			<form role="search" method="get" id="noresults-searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

			<label for="s" class="screen-reader-text"><span>Suche</span></label>
			<input type="text" class="search-field" name="s" autofocus id="noresults-s" placeholder="Suche ..." />
			<input type="submit" class="submit" name="submit" id="noresults-searchsubmit" value="Suche" />

			</form>

			</section>

	<?php endif; ?>

</main>

<?php get_footer(); ?>