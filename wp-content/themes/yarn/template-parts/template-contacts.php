<?php

/*
Template Name: Contacts
*/

get_header(); ?>

<section class="uk-section uk-image-contacts"></section>

<section class="uk-section uk-section-contacts">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h1 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
					<span><?php _e(' контакты ', 'yarn'); ?></span>
				</h1>				
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-small">
		<div uk-grid>
			<div class="uk-width-1-1 uk-width-1-3@s uk-width-1-2@m uk-text-center uk-text-left@s">
				<h2><?php _e('Как с нами связаться', 'yarn'); ?></h2>
				<address class="uk-flex uk-flex-column">
					<a class="uk-mail" href="mailto:<?php the_field('mail_contacts'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
						<?php the_field('mail_contacts'); ?>
					</a>
					<div class="uk-numberphone uk-flex uk-flex-column">
						<?php if( have_rows('all_contacts') ): ?>
							<?php while( have_rows('all_contacts') ): the_row(); ?>
								<a href="tel:<?php the_sub_field('phone_link');?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_sub_field('phone_link');?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
                    <?php if(!empty(the_field('address_contacts'))): ?>
					<span><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('address_contacts'); ?></span>
                    <?php endif; ?>
				</address>

				<div class="uk-social-icons">
					<p><?php _e('Мы в социальных сетях:', 'yarn'); ?></p>
					<ul class="uk-flex uk-flex-row uk-flex-center uk-flex-left@s uk-text-center">
						<li><a href="<?php the_field('link_facebook'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('link_twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('link_google'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="uk-width-1-1  uk-width-expand@s uk-width-1-2@m">
				<h2 class="uk-text-center"><?php _e('Напишите нам и мы ответим на все ваши вопросы', 'yarn'); ?></h2>
				<div class="uk-form-contacts uk-text-center">
					<?php echo do_shortcode( '[contact-form-7 id="40" title="contacts-form"]' ); ?>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- <section class="">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
					<span><?php //_e(' как нас найти ', 'yarn'); ?></span>
				</h2>				
			</div>
		</div>
	</div>
	<div class="uk-container-extand">
		<div id="map"></div>
	</div>
</section> -->

<?php get_footer(); ?>