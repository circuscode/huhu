<?php 

/**
 * The comments template
 *
 * @package huhu
 * @since 0.1
 */

?>

<div id="comments" class="comments-area">

<?php if ( have_comments() ) : ?>

	<div class="comments-title">

    <!-- Anzahl Kommentare -->
    <?php 
    $num_comments = get_comments_number();
    if ($num_comments==1) {
            echo $num_comments . ' Kommentar' ;
        }
        else 
        {
            echo $num_comments . ' Kommentare' ;
        }
    ?>
    
	</div>

	<ol class="comments-list">
    <?php
			wp_list_comments( array(
				'avatar_size' => 40,
				'style'       => 'li',
				'short_ping'  => true,
				'format'      => 'html5',
				'callback'    => 'huhu_comments',
			) );
	?>
	</ol>

<?php endif; ?>

<?php

$args = array(

    'title_reply_before' => '<div>',
    'title_reply' => '<div class="comments-reply">Schreibe einen Kommentar</div>',
    'title_reply_after' => '</div>',
	
    'comment_field' => 
        '<p class="comment-form-comment"><label for="comment">Kommentar</label><textarea id="comment" name="comment" cols="45" rows="8"></textarea></p>',

    'author' =>
        '<p class="comment-form-author">' .
        '<label for="author">Name</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"/></p>',

    'email' =>
        '<p class="comment-form-email"><label for="email">eMail</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"/></p>',

    'url' =>
        '<p class="comment-form-url"><label for="url">Blog</label>' .
        '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
        '" size="30" /></p>'
    
);

comment_form( $args );

?>

</div>