<?php

/*
Template Name: About Us
*/

get_header(); ?>

<section class="uk-section uk-image-about-us"></section>

<section class="uk-section">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
					<span><?php _e(' о нас ', 'yarn'); ?></span>
				</h2>				
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-small uk-text-center">
		<?php the_field('about_us_description'); ?>
	</div>
</section>

<section class="uk-section">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
					<span><?php _e('  почему мы  ', 'yarn'); ?></span>
				</h2>	
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-small uk-text-center">
		<?php the_field('why_we_description'); ?>
	</div>
</section>

<section class="uk-section uk-footer-image-a-us uk-visible@s"></section>

<?php get_footer(); ?>