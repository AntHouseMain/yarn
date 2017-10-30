<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yarn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- 
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yarn' ); ?></a> -->

	<header class="header-top">
		<div class="uk-container uk-flex uk-flex-row uk-flex-middle uk-flex-wrap uk-flex-around@m uk-flex-between uk-height-1-1">
			<div class="uk-logo">
				<a href="<?php echo site_url()?>">
					<img  src="<?php bloginfo('template_directory'); ?>/app/img/logo_header.png"  class="brand-logo" alt="" >
				</a>
			</div>
			<nav  uk-navbar>
				<div class="test-1 uk-visible@m"></div>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'uk-flex uk-flex-middle uk-visible@m',
				) );
				?>
				<a href="#" class="uk-hidden@m uk-navbar-right uk-navbar-toggle" uk-toggle="target: #offcanvas-nav">
					<span uk-navbar-toggle-icon></span>
					<span class="uk-margin-small-left"></span>
				</a>
				<div id="offcanvas-nav" uk-offcanvas="overlay: true">
					<div class="uk-offcanvas-bar uk-flex uk-flex-column">
						<div class="uk-search-header uk-text-center"><?php get_search_form(); ?></div>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu-mobile',
							'menu_class'     => 'uk-navbar-nav uk-flex uk-flex-column',
						) );
						wp_nav_menu( array(
							'theme_location' => 'cart-menu',
							'menu_id'        => 'cart-menu-top',
							'menu_class'     => 'uk-flex uk-flex-middle uk-margin-remove',
						) );
						?>
					</div>
				</div>
			</nav>
			<div class="uk-search-header uk-visible@m"><?php get_search_form(); ?></div>
			<div class="uk-visible@m">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'cart-menu',
					'menu_id'        => 'cart-menu-top',
					'menu_class'     => 'uk-flex uk-flex-middle uk-flex-center uk-margin-remove',
				) );
				?>
			</div>
		</div>
	</header><!-- #masthead -->

	<main>