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
						<span>Результат поиска:</span>
					</h1>
					<strong class="uk-text-uppercase uk-h3"><?php echo get_search_query(); ?></strong>
				</div><!-- .page-header -->
			</div>
		</div>
	</div>

    <div class="uk-container">
    <div uk-grid>

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

        <?php wc_get_template_part( 'content', 'product' );

    endwhile;
else :

    get_template_part( 'template-parts/content', 'none' );

endif; ?>

    </div>
        <?php

				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );

?>


    </div>
    			</section><!-- #primary -->
			<?php
	// get_sidebar();
			get_footer();
