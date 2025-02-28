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

function my_custom_image_sizes() {
    add_image_size('custom-size', 300, 200, true); // 300px wide by 200px tall, cropped
}
add_action('after_setup_theme', 'my_custom_image_sizes');

function ansmusic_setup() {
	load_theme_textdomain( 'ansmusic', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'ansmusic' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'ansmusic' ),
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



// load theme related gallery plugin to choose new breads and artist gallery images
// require_once get_template_directory() . '/inc/custom-gallery.php';
require_once get_template_directory() . '/inc/custom-acf-gallery.php';


// load theme related our team details adding features.
require_once get_template_directory() . '/inc/our-team-member-post-meta.php';

/**
 * =========== Enqueue scripts and styles =====================
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




/*=========== color customization =============*/
function ans_customize_color_section($wp_customize) {
    $wp_customize->add_section('custom_theme_colors', array(
        'title'    => __('Theme Colors', 'ansmusic'),
        'priority' => 20,
    ));

    // Color Settings Array
    $colors = [
        'clr_white' => ['White', '#e2e2e2', 'This color is used for text.'],
        'clr_yellow' => ['Yellow', '#fdff4b', 'Used for button text, border hover effects, etc.'],
        'clr_dark_black' => ['Dark Black', '#050D28', 'Used as background for footer, header, sidebar, etc.'],
        'clr_green' => ['Green', '#098c30', 'Used as text color for banners and sections.'],
        'clr_neon_magenda' => ['Neon Magenda', '#ea40f7', 'Used for text hover effects.'],
        'clr_dark_blue' => ['Dark Blue', '#03091B', 'Used as background for body and sidebar.'],
    ];

    // Add Color Settings
    foreach ($colors as $key => [$label, $default, $description]) {
        $wp_customize->add_setting($key, array(
            'default'   => $default,
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $key . '_control', array(
            'label'    => __($label, 'ansmusic'),
            'description' => __($description, 'ansmusic'),
            'section'  => 'custom_theme_colors',
            'settings' => $key,
        )));
    }
}

// insert root custom colors inside root variables of head
function ans_theme_custom_styles() {
    $clr_white = get_theme_mod('clr_white', '#e2e2e2');
    $clr_yellow = get_theme_mod('clr_yellow', '#fdff4b');
    $clr_dark_black = get_theme_mod('clr_dark_black', '#050D28');
    $clr_green = get_theme_mod('clr_green', '#098c30');
    $clr_dark_orange = get_theme_mod('clr_dark_orange', '#d80032');
    $clr_neon_magenda = get_theme_mod('clr_neon_magenda', '#ea40f7');
    $clr_dark_blue = get_theme_mod('clr_dark_blue', '#03091B');

    echo "<style>
        :root {
  --white: {$clr_white};
  --dark-black {$clr_dark_black};
  --light-green : {$clr_green};
  --dark-orange : {$clr_dark_orange};
  --light-yellow : {$clr_yellow};
  --neon-magenda: {$clr_neon_magenda};
  --dark-blue:{$clr_dark_blue};
  --deep-navy-blue:#081239;
  --bg-overlay-transparent: rgba(0, 0, 0, 0.72);
        }
    </style>";
}
add_action('wp_head', 'ans_theme_custom_styles');




/*====== custom logos =========*/
function ans_header_customization($wp_customize) {
    $wp_customize->add_section('ansmusic_logo_section', array(
        'title'       => __('Header Customization', 'ansmusic'),
        'priority'    => 22,
        'description' => __('Update Header logo, links etc.', 'ansmusic'),
    ));

    // Logo Settings Array
    $logos = [
        'ansmusic_header_logo' => ['Header Logo', 'This logo will appear in the header Navbar.','http://localhost/ans-music/wp-content/uploads/2025/02/ANS-site-logo.png'],
        'ansmusic_sidebar_logo' => ['Sidepanel Small Logo', 'This small logo will be used in the sidepanel.','http://localhost/ans-music/wp-content/uploads/2025/02/site-updated-logo.png'],
		];

    // Add Logos
    foreach ($logos as $key => [$label, $description, $default_url]) {
        $wp_customize->add_setting($key, array(
            'default'           => $default_url,
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $key . '_control', array(
            'label'       => __($label, 'ansmusic'),
            'description' => __($description, 'ansmusic'),
            'section'     => 'ansmusic_logo_section',
            'settings'    => $key,
        )));
    }
}


/*==========Necessary info customization===========*/ 
function ans_customize_necessary_info($wp_customize){
	$wp_customize->add_section('ansmusic_necessary_info_customization', array(
        'title'       => __('Necessary Info', 'ansmusic'),
        'priority'    => 25,
        'description' => __('Customize Address, email phone', 'ansmusic'),
    ));

	$necessary_info = [
        'office_address_1' => ['Office Address 1', '30 N Gould St Ste R Sheridan WY 82801 USA', 'This address will appear in office address', 'textarea'],
        'phone_number_1' => ['Phone Number 1', '+1(307)2042560', 'This phone number will appear below first office address', 'text'],
        'office_address_2' => ['Office Address 2', '21/A New Eskaton Road, Dhaka – 1000, Bangladesh.', 'This address will appear in office address', 'textarea'],
        'phone_number_2' => ['Phone Number 2', '+88 09611444739', 'This phone number will appear below second office address, footer, sidepanel etc', 'text'],
        'office_info_email' => ['Info Email', 'info@ansmusiclimited.com', 'This email will show in info email section', 'email'],
        'office_support_email' => ['Support Email', 'support@ansmusiclimited.com', 'This email will show in support email section', 'email'],
        'office_contact_email' => ['Contact Email', 'contact@ansmusiclimited.com', 'This email will show in contact email section', 'email'],
        'office_opening_time' => ['Office Opening Time', 'Mon-Fri 11am-5pm', 'Office opening and closing time', 'text'],
		'social_facebook' => ['Facebook profile URL', 'https://www.facebook.com/ansmusicdigital','','url'],
		'social_instagram' => ['Instagram Profile URL', 'https://www.instagram.com/ansmusic.digital/','','url'],
		'social_linkedin' => ['Linkedin Profile URL', 'https://www.linkedin.com/company/ansmusic','', 'url'],
		'social_youtube' => ['YouTube Chanel Link', 'https://www.youtube.com/@ANSMusicLimited','', 'url'],
    ];

	foreach ($necessary_info as $key => [$label, $default_info, $default_description, $field_type]) {
		$wp_customize->add_setting("ansmusic_{$key}", array(
			'default'           => $default_info,
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		));
	
		$wp_customize->add_control("ansmusic_{$key}_control", array(
			'label'       => __($label, 'ansmusic'),
			'description' => __($default_description, 'ansmusic'),
			'section'     => 'ansmusic_necessary_info_customization',
			'settings'    => "ansmusic_{$key}",
			'type'        => $field_type,
		));
	}
}

/*====== footer customization ========*/ 
function ans_customize_footer($wp_customize){
	$wp_customize->add_section('ansmusic_footer_customization', array(
        'title'       => __('Footer Customization', 'ansmusic'),
        'priority'    => 25,
        'description' => __('Customize site footer', 'ansmusic'),
    ));
	
	// footer logo
	$wp_customize->add_setting('ansmusic_footer_logo', array(
        'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/ans-footer-logo.jpg',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ansmusic_footer_logo_control', array(
        'label'       => __('Footer Logo', 'ansmusic'),
        'description' => __('Upload a logo for the footer.', 'ansmusic'),
        'section'     => 'ansmusic_footer_customization',
        'settings'    => 'ansmusic_footer_logo',
    )));


	// footer description
	$default_footer_des = 'ANS Music is a global digital music distributor and aggregator dedicated to empowering artists, labels, and rights holders. Founded in 2022, we provide comprehensive services, including digital music and video distribution, royalty collection, licensing, and marketing, ensuring creators receive maximum value and transparency.';
	$wp_customize->add_setting('ansmusic_footer_description', array(
		'default'           => $default_footer_des,
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('ansmusic_footer_description_control', array(
		'label'       => __('Footer description', 'ansmusic'),
		'description' => __('This text will appear in the footer below site logo', 'ansmusic'),
		'section'     => 'ansmusic_footer_customization',
		'settings'    => 'ansmusic_footer_description',
		'type'        => 'textarea',
	));

    // group logo
	$group_logos = [
        'group_logo_first' => ['First Group Logo', 'Membership Group logo First.','http://localhost/ans-music/wp-content/uploads/2025/02/a2im-logo.png'],
        'group_logo_second' => ['Second Group Logo', 'Membership Group logo second.','http://localhost/ans-music/wp-content/uploads/2025/02/basis-logo-bd.png'],
    ];

	foreach ($group_logos as $key => [$label, $description, $default_url]) {
        $wp_customize->add_setting($key, array(
            'default'           => $default_url,
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $key . '_control', array(
            'label'       => __($label, 'ansmusic'),
            'description' => __($description, 'ansmusic'),
            'section'     => 'ansmusic_footer_customization',
            'settings'    => $key,
        )));
    }

	// footer copy right section
	$default_copyright_text = 'Copyright 2024 | ANS Digital | All right reserved | Powered by ANS Enterprise LLC';
	$wp_customize->add_setting('ansmusic_footer_copyright_text', array(
		'default'           => $default_copyright_text,
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('ansmusic_footer_copyright_text_control', array(
		'label'       => __('Footer Copy right text', 'ansmusic'),
		'description' => __('This text will appear in the footer bottoms ection', 'ansmusic'),
		'section'     => 'ansmusic_footer_customization',
		'settings'    => 'ansmusic_footer_copyright_text',
		'type'        => 'textarea',
	));

}

/*====== partners galler  ========*/ 
function ans_partners_gallery($wp_customize){
   // Add section for the gallery
   $wp_customize->add_section('custom_gallery_section', array(
    'title' => __('Partners Gallery', 'ansmusic'),
    'priority' => 30,
));

// Add hidden setting for the gallery images (comma-separated list)
$wp_customize->add_setting('custom_gallery_images', array(
    'default' => '',
    'sanitize_callback' => 'theme_sanitize_gallery_images',
));

// Add textarea control (hidden by default) for gallery images URLs
$wp_customize->add_control('custom_gallery_images_control', array(
    'label' => __('Gallery Images (hidden)', 'ansmusic'),
    'section' => 'custom_gallery_section',
    'settings' => 'custom_gallery_images',
    'type' => 'textarea',
    'description' => 'This textarea stores the image URLs (hidden from view).',
    'input_attrs' => array(
        'style' => 'display: none;',
    ),
));
}

 function ans_theme_customize_register($wp_customize) {
	 ans_customize_color_section($wp_customize);
	 ans_header_customization($wp_customize);
	 ans_customize_necessary_info($wp_customize);
	ans_customize_footer($wp_customize);
	ans_partners_gallery($wp_customize);
}
add_action('customize_register', 'ans_theme_customize_register');

// sanitize images
function theme_sanitize_gallery_images($value) {
    if (empty($value)) return '';
    
    // Sanitize and split URLs by commas
    $images = explode(',', $value);
    $images = array_map('esc_url_raw', $images);
    return implode(',', $images); // Save as a comma-separated list
}

// Enqueue customizer scripts and styles
function theme_customize_scripts() {
    wp_enqueue_script('gallery-customizer-js', get_template_directory_uri() . '/assets/js/partners-gallery.js', array('jquery'), null, true);
    wp_enqueue_style('gallery-customizer-css', get_template_directory_uri() . '/assets/css/partners-gallery.css');
}
add_action('customize_controls_enqueue_scripts', 'theme_customize_scripts');



// ====== custom post type =========
function register_distribution_partners_cpt() {
    $labels = array(
        'name'               => 'Distribution Partners',
        'singular_name'      => 'Distribution Partner',
        'menu_name'          => 'Distribution Partners',
        'name_admin_bar'     => 'Distribution Partner',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Partner',
        'new_item'           => 'New Partner',
        'edit_item'          => 'Edit Partner',
        'view_item'          => 'View Partner',
        'all_items'          => 'All Partners',
        'search_items'       => 'Search Partners',
        'not_found'          => 'No partners found',
        'not_found_in_trash' => 'No partners found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'distribution-partners'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('partners', $args);
}
add_action('init', 'register_distribution_partners_cpt');




// ====== custom post type =========
function register_features_cpt() {
    $labels = array(
        'name'               => 'Features',
        'singular_name'      => 'Feature',
        'menu_name'          => 'Features',
        'name_admin_bar'     => 'Feature',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Feature',
        'new_item'           => 'New Feature',
        'edit_item'          => 'Edit Feature',
        'view_item'          => 'View Feature',
        'all_items'          => 'All Features',
        'search_items'       => 'Search Features',
        'not_found'          => 'No Features found',
        'not_found_in_trash' => 'No Features found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'features'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-nametag', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('features', $args);
}
add_action('init', 'register_features_cpt');
