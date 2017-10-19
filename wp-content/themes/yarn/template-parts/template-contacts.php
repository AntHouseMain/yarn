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
					<span> контакты </span>
				</h1>				
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-small">
		<div uk-grid>
			<div class="uk-width-1-1 uk-width-1-3@s uk-width-1-2@m uk-text-center uk-text-left@s">
				<h2>Как с нами связаться</h2>
				<address class="uk-flex uk-flex-column">
					<span class=""><i class="fa fa-envelope" aria-hidden="true"></i>Karantekstil@gmail.com</span>
					<div class="uk-numberphone uk-flex uk-flex-column">
						<span><i class="fa fa-phone" aria-hidden="true"></i>+ 38 (050) 741 91 75</span>
						<span>+ 38 (050) 741 91 75</span>
						<span>+ 38 (050) 741 91 75</span>
					</div>
					<span><i class="fa fa-map-marker" aria-hidden="true"></i>г.Харьков ул. Механизаторская 9А</span>
				</address>
				<div class="uk-social-icons">
					<p>Мы в социальных сетях:</p>
					<ul class="uk-flex uk-flex-row uk-text-center">
						<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="uk-width-1-1  uk-width-expand@s uk-width-1-2@m">
				<h2 class="uk-text-center">Напишите нам и мы ответим на все ваши вопросы</h2>
				<div class="uk-form-contacts uk-text-center">
					<?php echo do_shortcode( '[contact-form-7 id="40" title="contacts-form"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	
</section>

<section class="">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
					<span> как нас найти </span>
				</h2>				
			</div>
		</div>
	</div>
	<div class="uk-container-extand">
	 <div id="map"></div>
	</div>
</section>

<?php get_footer(); ?>