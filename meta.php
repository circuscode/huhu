<?php 

/**
 * The meta template
 *
 * @package huhu
 * @since 0.1
 */

?>

<?php 

$current_format=get_post_type(); 
$huhu_post_id=get_the_ID();

?>

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
		<?php

		/* Creative Commons */

		if ( huhu_is_creative_commons($huhu_post_id)) { ?>

			<div class="entry-license">
			<span class="entry-license-label">Lizenz</span>
			<span class="entry-license-name">
			<?php 

			huhu_creative_commons_the_simple_string($huhu_post_id);
			
			?>
			</span>

			<span class="entry-license-logo">
			<?php 

			huhu_creative_commons_the_ccby_greybox($huhu_post_id);
			
			?>
			</span>

			<span class="entry-license-excludes">
			<?php 
			
			huhu_creative_commons_the_excluded_content_sentence($huhu_post_id)
			
			?>
			</span>
			
			</div>

		<?php } ?>

	<?php }

	/* Zimtwolke */
	if($current_format=='ello') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_terms($post->ID, 'tagebuch')) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Tagebuch</span>
			<span class="entry-tags-list"><?php the_terms( $post->ID, 'tagebuch' ); ?></span>
			</div>
		<?php } ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php

		/* Creative Commons */

		if ( huhu_is_creative_commons($huhu_post_id)) { ?>

			<div class="entry-license">
			<span class="entry-license-label">Lizenz</span>
			<span class="entry-license-name">
			<?php 

			huhu_creative_commons_the_license_type_stringhref_short($huhu_post_id);
			
			?>
			</span>

			<span class="entry-license-excludes">
			<?php 
			
			huhu_creative_commons_the_excluded_content_sentence($huhu_post_id)
			
			?>
			</span>

			<span class="entry-license-logo">
			<?php 

			huhu_creative_commons_the_ccby_logo($huhu_post_id);
			
			?>
			</span>


			
			</div>

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
		<p class=entry-sketchnote-description><?php echo get_the_excerpt(); ?></p>
		</div>
		<?php if(get_the_terms($post->ID, 'kunsthalle')) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Kunsthalle</span>
			<span class="entry-tags-list"><?php the_terms( $post->ID, 'kunsthalle' ); ?></span>
			</div>
		<?php } ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>
		<?php 
		
		/* Creative Commons */

		if ( huhu_is_creative_commons($huhu_post_id)) { ?>

				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name">
				<?php 

				huhu_creative_commons_the_license_type_stringhref_short($huhu_post_id);
				
				?>
				</span>
				<span class="entry-license-logo">
				<?php 

				huhu_creative_commons_the_cc_logo($huhu_post_id);
				
				?>
				</span>
				
				</div>
		
		<?php } ?>
	<?php }

	/* Podcast */
	if($current_format=='podcast') { ?>
		<div class="entry-date">
		<span class="entry-date-label">Datum</span>
		<span class="entry-date-day published"><?php the_date(); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_terms($post->ID, 'artist')) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Kategorie</span>
			<span class="entry-tags-list"><?php the_terms( $post->ID, 'artist' ); ?></span>
			</div>
		<?php } ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-label">Schlagworte</span>
			<span class="entry-tags-list"><?php the_tags('', ', ', ''); ?></span>
			</div>
		<?php } ?>

		<?php 

		/* Creative Commons */

		if ( huhu_is_creative_commons($huhu_post_id)) { ?>

				<div class="entry-license">
				<span class="entry-license-label">Lizenz</span>
				<span class="entry-license-name">
				<?php 

				huhu_creative_commons_the_license_type_stringhref_long($huhu_post_id);

				?>
				</span>
				<span class="entry-license-excludes">
				<?php 
				
				huhu_creative_commons_the_excluded_content_sentence($huhu_post_id)
				
				?>
				</span>
				<span class="entry-license-logo">
				<?php 	

				huhu_creative_commons_the_ccby_logo($huhu_post_id);
				
				?>
				</span>
				
				</div>

		<?php } ?>

	<?php }

	/* Raketenstaub */
	if($current_format=='raketenstaub') { ?>
		<div class="entry-date">
		<span class="entry-date-day published"><?php the_time(get_option('date_format')); ?></span>
		</div>
		<?php get_template_part( 'microformats' ) ?>
		<?php if(get_the_tags()) { ?>
			<div class="entry-tags">
			<span class="entry-tags-list"><?php the_tags('', '<br/>', ''); ?></span>
		<?php } ?>
		<?php if(get_the_terms($post->ID, 'fotoalbum')) { ?>
			<span class="entry-cats-list"><br/><?php the_terms( $post->ID, 'fotoalbum' ); ?></span>
			</div>
		<?php } ?>
	<?php }

?>

</div>