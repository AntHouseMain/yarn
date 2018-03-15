<?php
/**
 * yarn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yarn
 */



if ( ! function_exists( 'yarn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yarn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yarn, use a find and replace
		 * to change 'yarn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yarn', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yarn' ),
			'cart-menu'  => esc_html__('Cart', 'yarn'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'yarn_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'yarn_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yarn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yarn_content_width', 640 );
}
add_action( 'after_setup_theme', 'yarn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function yarn_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yarn' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yarn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yarn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yarn_scripts() {
	// wp_enqueue_style( 'yarn-style', get_stylesheet_uri() );


	wp_enqueue_style( 'roboto-font-style', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic' );
	wp_register_style('uikit-css', get_template_directory_uri() . '/app/css/uikit.min.css');
	// wp_register_style( 'uikit-css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css' );
	wp_enqueue_style('uikit-css');
	wp_register_style('width-ex-css', get_template_directory_uri() . '/app/css/width-ex.min.css');
	wp_enqueue_style('width-ex-css');
	wp_register_style('main-css', get_template_directory_uri() . '/app/css/main.css');
	wp_enqueue_style('main-css');
	wp_register_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
	wp_enqueue_style('slick-css');
	wp_enqueue_style( 'yarn-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'yarn-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', true );
	wp_register_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array ('jquery'), null, true);
	wp_enqueue_script('slick-js');
	// wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCn6dGfdktRWfG7YjL57ScwhLClvt93U-c&callback=initMa', true );
	// wp_register_script('uikit-js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js', array ('jquery'), null, true);
	wp_register_script('uikit-js', get_template_directory_uri() . '/app/js/uikit.min.js', array ('jquery'), null, true);
	wp_enqueue_script('uikit-js');


	wp_register_script('main-js', get_template_directory_uri() . '/app/js/main.js', array ('jquery'), null, true);
	wp_enqueue_script('main-js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yarn_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_filter('woocommerce_cart_needs_payment', 'disabled_payment');
function disabled_payment () {
	return false;
}

function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}

// remove the hook to the default function
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
add_action ( 'woocommerce_before_shop_loop_item', 'my_function', 10 );
function my_function() {
	echo '<a href="' . get_the_permalink() . '"class="woocommerce-LoopProduct-link woocommerce-loop-product__link uk-position-relative uk-products-image">';
}

add_filter( 'woocommerce_checkout_fields' , 'new_woocommerce_checkout_fields', 10, 1 );

function new_woocommerce_checkout_fields($fields){

	$fields['billing']['billing_address_1']['type']="textarea"; 

	$fields['billing']['billing_address_1']['label']="Адрес для доставки";

	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']); 

	return $fields;
}
// delete visual editor from some pages
function onwp_disable_content_editor() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if ( $template_file == 'template-parts/template-about-us.php' ) {
		remove_post_type_support( 'page', 'editor' );
	}
	if ( $template_file == 'template-parts/template-contacts.php' ) {
		remove_post_type_support( 'page', 'editor' );
	}
}

add_action( 'admin_init', 'onwp_disable_content_editor' );

// custom image products
add_action( 'init', 'custom_fix_thumbnail' );

function custom_fix_thumbnail() {
	add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

	function custom_woocommerce_placeholder_img_src( $src ) {
		$upload_dir = wp_upload_dir();
		$uploads = untrailingslashit( $upload_dir['baseurl'] );
		$src = $uploads . '/2017/10/karan.png';

		return $src;
	}
}

