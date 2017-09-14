<?php

/**
 * The 404 template
 *
 * @package huhu
 * @since 0.1
 */
 
get_header(); ?>

<main id="primary" class="site-content">

	<section class="no-results">

    <header class="entry-header">
    <h2 class="entry-title">404! Ups, nichts gefunden</h2>
    </header>

    <div class="entry-content">
    <p>Vielleicht kann die Suche helfen?</p>
    
    			<form role="search" method="get" id="404searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
				<label for="s" class="screen-reader-text"><span>Suche</span></label>
				<input type="text" class="search-field" name="s" autofocus id="404s" placeholder="Suche ..." />
				<input type="submit" class="submit" name="submit" id="404searchsubmit" value="Suche" />

				</form>

    </div>

	</section>	

</main>

<?php get_footer(); ?>
