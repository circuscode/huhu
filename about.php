<?php 

/**
 * The about the author template
 *
 * @package huhu
 * @since 0.1
 */

?>

<?php 

$current_format=get_post_type(); 
$rocket_photographer=get_post_meta($post->ID, 'rocket_photographer_other', true);

?>

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

		if(!$rocket_photographer) {
			echo 'Über den Photograph';
		}
		else {
			echo 'Photograph';
		}

	}

?>
</div>

<div class="author-bio">
<?php 

if(!$rocket_photographer) {
	the_author_meta( 'description' ); 
}
else {
	echo $rocket_photographer;
}

?>
</div>

</div>