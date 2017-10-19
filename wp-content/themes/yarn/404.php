<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yarn
 */

get_header(); ?>



<section class="uk-section error-404 not-found">
	<hr class="small-hr-top">
	<div class="uk-container uk-text-center">
		<span>404</span>
		<p>Запрашиваемая вами страница не найдена!</p>
		<ul class="uk-eror-404-circle uk-flex uk-flex-row uk-flex-center uk-margin-medium-bottom">
			<li><a href="<?php echo site_url()?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li><a href="<?php echo get_permalink(6); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<hr class="small-hr">
</section><!-- .error-404 -->

<?php
get_footer();
