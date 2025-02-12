<?php
/**
 * ansmusic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ansmusic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function ansmusic_setup() {
	load_theme_textdomain( 'ansmusic', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ansmusic' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ansmusic_setup' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




/**
 * Enqueue scripts and styles.
 */
function ansmusic_scripts() {
    // <link rel="stylesheet" href="/assets/css/theme.css" />
    // <link rel="stylesheet" href="/assets/css/style.css" />
    // <link rel="stylesheet" href="/assets/css/aos.css" />
	wp_enqueue_style( 'ansmusic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'root-variables', get_template_directory_uri().'/assets/css/theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'aos-style', get_template_directory_uri().'/assets/css/aos.css', array(), '1.0.0');


	// enqueue scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),  _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'ansmusic_scripts' );
