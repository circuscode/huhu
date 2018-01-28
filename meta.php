<?php 

/**
 * The meta template
 *
 * @package huhu
 * @since 0.1
 */

?>

<?php $current_format=get_post_type(); ?>

<div class="entry-meta">

<?php

	/* Posts */
	if($current_format=='post') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<div class="entry-cats">
		<span class="entry-cats-label">Kategorie</span>
		<span class="entry-cats-name"><?php the_category(', '); ?></span>
		</div>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php if (function_exists  ('creative_commons') ) { 
			$license_available=get_post_meta($post->ID, 'licence_type', true);
			if ($license_available!='') { ?>
				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name"><?php creative_commons(); ?></span>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }

	/* Zimtwolke */
	if($current_format=='ello') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php if (function_exists  ('creative_commons') ) { 
			$license_available=get_post_meta($post->ID, 'licence_type', true);
			if ($license_available!='') { ?>
				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name"><?php creative_commons(); ?></span>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }

	/* Pinseldisko */
	if($current_format=='pinseldisko') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<div class="entry-sketchnote">
		<div class="entry-sketchnote-label">Sketchnote</div>
		<h1 class=entry-sketchnote-name><?php the_title(); ?></h1>
		<p class=entry-sketchnote-description><?php the_sketchnote_description(); ?></p>
		</div>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php if (function_exists  ('creative_commons') ) { 
			$license_available=get_post_meta($post->ID, 'licence_type', true);
			if ($license_available!='') { ?>
				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name"><?php creative_commons(); ?></span>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }

	/* Podcast */
	if($current_format=='podcast') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php if (function_exists  ('creative_commons') ) { 
			$license_available=get_post_meta($post->ID, 'licence_type', true);
			if ($license_available!='') { ?>
				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name"><?php creative_commons(); ?></span>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }

	/* Raketenstaub */
	if($current_format=='raketenstaub') { ?>
		<div class="entry-date">
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-list"><?php the_tags('', '<br/>', ''); ?></span>
			</div>
		<?php } ?>
	<?php }

?>

</div>