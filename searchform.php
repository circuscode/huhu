<?php 

/**
 * The search form
 *
 * @package huhu
 * @since 0.1
 */

?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label for="s" class="screen-reader-text"><span>Suche</span></label>

	<input type="text" class="search-field" name="s" id="s" placeholder="Suche ..." />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="Suche" />

</form>