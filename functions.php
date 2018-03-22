<?php
/**
 * Zelda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zelda
 */

if ( ! function_exists( 'zelda_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zelda_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Zelda, use a find and replace
	 * to change 'zelda' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'zelda', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'zelda' ),
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
	add_theme_support( 'custom-background', apply_filters( 'zelda_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'zelda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zelda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zelda_content_width', 640 );
}
add_action( 'after_setup_theme', 'zelda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zelda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zelda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zelda' ),
		'before_widget' => '<section id="%1$s" class="panel panel-default %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="panel-heading space-bottom-10"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'zelda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zelda_scripts() {
	wp_enqueue_style( 'zelda-style', get_stylesheet_uri() );

	wp_enqueue_script( 'zelda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zelda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zelda_scripts' );

/**
 * Register global variables.
 */
function fnRegisterGlobals() {
	// Location of all S3 SHC assets.
	$GLOBALS["global_s3Assets"] = "https://d2itdnqewolu1g.cloudfront.net";
	$GLOBALS["global_webTemplate"] = "https://d2itdnqewolu1g.cloudfront.net/web-templates/the_project_1.4/html/template";
}
add_action("parse_query", "fnRegisterGlobals");



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Removes extra <p> tags.
 */
remove_filter('the_content', 'wpautop');

/**
 * Declare support for WooCommerce.
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
 * Remove WooCommerce breadcrumb.
 */
add_action( 'init', 'zelda_remove_wc_breadcrumbs' );
function zelda_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

/**
 * Remove reviews from WooCommerce.
 */
add_filter( "woocommerce_product_tabs", "sb_woo_remove_reviews_tab", 98);
function sb_woo_remove_reviews_tab($tabs) { 
	unset($tabs["reviews"]);
	return $tabs;
}