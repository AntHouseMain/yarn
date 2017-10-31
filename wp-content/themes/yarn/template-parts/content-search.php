<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package yarn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="uk-container">
		<div class="uk-margin-medium-bottom" uk-grid>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
				<?php echo get_the_post_thumbnail() ?>
			</div>
			<div class="uk-width-1-1 uk-width-1-2@s uk-width-2-3@m uk-flex uk-flex-wrap uk-flex-column uk-flex-center uk-flex-wrap ">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php yarn_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>

				<div class="entry-summary">
					<?php
					(is_single() &&'post' === get_post_type() )
					?  the_content()  
					:the_truncated_post( 200 ) ; ?>
				</div><!-- .entry-summary -->

				<footer class="entry-footer">
					<?php yarn_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
