<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package yarn
 */

get_header(); ?>

<section class="uk-section">

	<div class="uk-container-expand uk-margin-large-bottom">
		<div uk-grid>
			<div class="uk-width-1-1 uk-text-center">
				<?php
				if ( have_posts() ) : ?>
				<div class="page-header">
					<h1 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span>Резулльтат поиска:</span>
					</h1>
					<strong class="uk-text-uppercase uk-h3"><?php echo get_search_query(); ?></strong>
				</div><!-- .page-header -->
			</div>
		</div>
	</div>

	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				endwhile; ?>

				<div class="uk-navigation-search uk-text-center uk-margin-medium-top">
					<?php 
					wp_pagenavi();
					?>
				</div>
				<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</section><!-- #primary -->

			<?php
	// get_sidebar();
			get_footer();
