<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yarn
 */

?>

</main>

<footer class="uk-footer uk-margin-large-top">
	<div class="uk-container uk-container-small uk-margin-medium-bottom">
		<div uk-grid>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-4@m uk-text-center uk-text-left@s uk-flex uk-flex-center uk-flex-middle uk-flex-column">
				<img  src="<?php bloginfo('template_directory'); ?>/app/img/logo_header.png"  class="brand-logo" alt="" >
			</div>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-2@m uk-text-center uk-text-left@s">
				<address class="uk-flex uk-flex-column">
					<a class="uk-mail" href="mailto:<?php the_field('mail_contacts', 34); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
						<?php the_field('mail_contacts', 34); ?>
					</a>
					<div class="uk-numberphone uk-flex uk-flex-column">
						<?php if( have_rows('all_contacts', 34) ): ?>
							<?php while( have_rows('all_contacts' ,34) ): the_row(); ?>
								<a href="tel:<?php the_sub_field('phone_link', 34);?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_sub_field('phone_link', 34);?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<span><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('address_contacts', 34); ?></span>
				</address>
			</div>
			<div class="uk-social-icons uk-width-1-1 uk-width-1-4@m uk-text-center">
				<p><?php _e('Мы в социальных сетях:', 'yarn'); ?></p>
				<ul class="uk-flex uk-flex-row uk-flex-center">
					<li><a href="<?php the_field('link_facebook', 34); ?>" target="_blank><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('link_twitter', 34); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('link_google', 34); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="uk-container-expand">
		<div class="uk-footer-copyright uk-text-center uk-padding-small">
			<p>© KaranTekstil 2017 Все права защищены</p>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT16tOY5AutRT0grSvfQVqvq0I-rw6y-E&callback=initMap">
</script>
</body>
</html>
