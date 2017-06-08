<?php
/**
 * Recruitive2.0 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Recruitive2.0
 */

if ( ! function_exists( 'recruitive_ab_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function recruitive_ab_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Recruitive2.0, use a find and replace
	 * to change 'recruitive-ab' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'recruitive-ab', get_template_directory() . '/languages' );

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
	function register_my_menu() {
  	register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );	

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
	add_theme_support( 'custom-background', apply_filters( 'recruitive_ab_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'recruitive_ab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function recruitive_ab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'recruitive_ab_content_width', 640 );
}
add_action( 'after_setup_theme', 'recruitive_ab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function recruitive_ab_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'recruitive-ab' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'recruitive-ab' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'First Footer Widget Area',
		'id' => 'footer-area-1',
		'description' => 'Appears in first footer area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-header">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Second Footer Widget Area',
		'id' => 'footer-area-2',
		'description' => 'Appears in second footer area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-header">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Third Footer Widget Area',
		'id' => 'footer-area-3',
		'description' => 'Appears in third footer area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-header">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'recruitive_ab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function recruitive_ab_scripts() {
	wp_enqueue_style( 'recruitive-ab-style', get_stylesheet_uri() );

	wp_enqueue_script( 'recruitive-ab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'recruitive-ab-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'recruitive-ab-tjanst-bemanning', get_template_directory_uri() . '/js/tjanst-bemanning.js', array(), '20170519', true );

	wp_enqueue_script( 'recruitive-ab-tjanst-rekrytering', get_template_directory_uri() . '/js/tjanst-rekrytering.js', array(), '20170522', true );

	wp_enqueue_script( 'recruitive-ab-parallax', get_template_directory_uri() . '/js/parallax.js', array(), '20170522', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'recruitive_ab_scripts' );

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
* Logotype uploader
*/

function recruitive_logo_uploader( $wp_customize ) {
	$wp_customize->add_section( 'recruitive_logo_section' , array(
		'title'       => __( 'Logo', 'recruitive' ),
		'priority'    => 30,
		'description' => 'Här laddar du upp din logotyp - se fan till att den är bra.',
	) );
	$wp_customize->add_setting( 'recruitive_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'recruitive_logo', array(
		'label'    => __( 'Logo', 'recruitive' ),
		'section'  => 'recruitive_logo_section',
		'settings' => 'recruitive_logo',
	) ) );
}
add_action( 'customize_register', 'recruitive_logo_uploader' );


/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

/* Google Maps API to display a map */
function google_map_api( $api ){
	
	$api['key'] = 'AIzaSyDgtkO8YWTTS0ygXuEGUcm6DSla63rkrZE';
	
	return $api;
	
}
add_filter('acf/fields/google_map/api', 'google_map_api');

function acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDgtkO8YWTTS0ygXuEGUcm6DSla63rkrZE');
}

add_action('acf/init', 'acf_init');