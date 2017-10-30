<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package yarn
 */

?>

<section class="uk-section uk-image-contacts"></section>


<article id="post-<?php the_ID(); ?>" <?php post_class('uk-margin-large-bottom'); ?>>
	<div class="uk-width-1-1 uk-text-center">
		<h1 class="uk-heading-line uk-text-uppercase uk-text-bold-title uk-margin-medium-top uk-margin-large-bottom">
			<?php the_title( '<span>', '</span>' ); ?>
		</h1>
	</div><!-- .entry-header -->
	
	<div class="uk-container">
		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yarn' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<div class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'yarn' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</div><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<section class="uk-section uk-footer-image-a-us uk-visible@s"></section>