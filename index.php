<?php 

/**
 * The main template file
 *
 * @package huhu
 * @since 0.1
 */

get_header(); ?>

<main id="primary" class="site-content">

<?php 		

	$huhu_post_index_one=true;
	$huhu_white="";

	// Start the Loop.

	while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php

		$huhu_current_format=get_post_type();
		if($huhu_current_format=='post') {

			?>
			<?php /* Thumbnail */ ?>
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('large'); ?>
			</a>
			</div>
			<?php } ?>

		<?php } ?>

		<?php 
		
		/* White Space */
		if($huhu_post_index_one && !has_post_thumbnail() )
			{$huhu_white='addwhite';}
		elseif ($huhu_post_index_one && is_post_type('podcast')) 
			{$huhu_white='addwhite';}
		$huhu_post_index_one=false;	
		?>

		<?php /* Headline */ ?>
		<header class="entry-header <?php echo $huhu_white; ?>">
		<?php $huhu_white=''; ?>
		<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php the_title(); ?>
		</a>
		</h2>
		</header>

		<?php /* Text */ ?>
		<div class="entry-intro">
		<?php the_content( 'Weiterlesen' );?>
		</div>

		<?php /* Date */ ?>
		<footer>
		<div class="entry-date published"><?php the_date(); ?></div>
		<?php get_template_part( 'microformats' ) ?>
		</footer>

	</article>

	<?php endwhile;?>

</main>

<?php get_footer(); ?>