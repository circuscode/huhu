<?php 

/**
 * The ello archive
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

		<?php 
		$huhu_post_format='ello-post';
		if (has_post_format('quote')) {
			$huhu_post_format='ello-quote';
		} elseif (has_post_format('image')) {
			$huhu_post_format='ello-image';
		}
		?>

		<?php /* Headline */ ?>
		<header class="entry-header <?php echo $huhu_post_format; ?>">
		<h2 class="entry-title published">
		<?php if($huhu_post_format=='ello-post'){ ?> 
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php } ?> 
		<?php the_date(); ?>
		<?php if($huhu_post_format=='ello-post'){ ?> 
		</a>
		<?php } ?> 
		</h2>
		</header>

		<?php /* Text */ ?>
		<div class="entry-content">
		<?php the_content();?>
		</div>

		<?php get_template_part( 'microformats' ) ?>

		<?php 
		if ( !has_post_format( 'quote' ) AND !has_post_format( 'image' ) ) {
		?>
			<!-- Button Comments -->                        
			<div class="btn-zimt-comments
			<?php
			$number_of_zimtcomments=get_comments_number();
			if ($number_of_zimtcomments)
				{
					echo 'zimt-comments-yes';
				} 
				else
				{

					echo 'zimt-comments-no';
				}; ?> 
			">
			<a href="<?php the_permalink(); ?>">
			<!-- Anzahl Kommentare -->
			<?php if ($number_of_zimtcomments)
			{
				$num_comments = $number_of_zimtcomments;
				if ($num_comments==1) {
						echo $num_comments . ' Kommentar' ;
					}
					else 
					{
					echo $num_comments . ' Kommentare' ;
					}
			} 
			else
			{
				echo 'Kommentieren';
			}; ?>
			</a>
			</div>
		<?php } ?>

		</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>