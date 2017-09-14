/**
 * Huhu JavaScript
 *
 */

( function($) {

	/*
	* Mobile Main Menu
	*/

	$('#mobile-menu-toggle').on( 'click', function () {
		$('#site-nav').slideToggle('600');
		$('#site-nav').toggleClass('show-mobile-search');
	});
	
	/*
	* Search on Desktops
	*/
	
	$('.search-toggle').on( 'click', function () {
		$('body').toggleClass('show-desktop-search');
	});

	/*
	* Scalable Videos via FitVids.
	*/
	$('#primary').fitVids();

} )(jQuery);