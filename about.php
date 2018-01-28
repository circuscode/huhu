<?php 

/**
 * The about the author template
 *
 * @package huhu
 * @since 0.1
 */

?>

<?php $current_format=get_post_type(); ?>

<div class="authorbox">

<div class="author-heading">
<?php

	if($current_format=='post') {
		echo 'Über den Autor';
	}
	elseif($current_format=='ello') {
		echo 'Über den Blogger';
	}
	elseif($current_format=='pinseldisko') {
		echo 'Über den Zeichner';
	}
	elseif($current_format=='raketenstaub') {
		echo 'Über den Photograph';
	}

?>
</div>

<div class="author-bio">
<?php the_author_meta( 'description' ); ?>
</div>

</div>