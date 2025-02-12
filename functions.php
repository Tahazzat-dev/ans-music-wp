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



/*====== custom logos =========*/
function ans_customize_logo_section($wp_customize) {
    $wp_customize->add_section('ansmusic_logo_section', array(
        'title'       => __('Site Logos', 'ansmusic'),
        'priority'    => 20,
        'description' => __('Upload brand logos for different sections of the website.', 'ansmusic'),
    ));

    // Logo Settings Array
    $logos = [
        'ansmusic_header_logo' => ['Header Logo', 'This logo will appear in the header Navbar.','http://localhost/ans-music/wp-content/uploads/2025/02/ANS-site-logo.png'],
        'ansmusic_sidebar_logo' => ['Sidepanel Small Logo', 'This small logo will be used in the sidepanel.','http://localhost/ans-music/wp-content/uploads/2025/02/site-updated-logo.png'],
        'ansmusic_footer_logo' => ['Footer Logo', 'This logo will appear in the footer.','http://localhost/ans-music/wp-content/uploads/2025/02/ans-footer-logo.jpg'],
        'group_logo_first' => ['First Group Logo', 'Membership Group logo First.','http://localhost/ans-music/wp-content/uploads/2025/02/a2im-logo.png'],
        'group_logo_second' => ['Second Group Logo', 'Membership Group logo second.','http://localhost/ans-music/wp-content/uploads/2025/02/basis-logo-bd.png'],
    ];

    // Add Logos
    foreach ($logos as $key => [$label, $description, $default_url]) {
        $wp_customize->add_setting($key, array(
            'default'           => $$default_url,
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


/*=========== color customization =============*/
 function ans_customize_color_section($wp_customize) {
    $wp_customize->add_section('custom_theme_colors', array(
        'title'    => __('Theme Colors', 'ansmusic'),
        'priority' => 30,
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

 function ans_theme_customize_register($wp_customize) {

/* ==== site logo selector =======*/ 
$wp_customize->add_section('ansmusic_logo_section', array(
	'title'       => __('Site Logos', 'ansmusic'),
	'priority'    => 20,
	'description' => __('Upload brand logos for different sections of the website.', 'ansmusic'),
));

// Header Logo Setting
$wp_customize->add_setting('ansmusic_header_logo', array(
	'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/ANS-site-logo.png',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ansmusic_header_logo_control', array(
	'label'       => __('Header Logo', 'ansmusic'),
	'description' => __('This logo will appear in the header Navbar.', 'ansmusic'),
	'section'     => 'ansmusic_logo_section',
	'settings'    => 'ansmusic_header_logo',
)));

// Sidebar Small Logo Setting
$wp_customize->add_setting('ansmusic_sidebar_logo', array(
	'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/site-updated-logo.png',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ansmusic_sidebar_logo_control', array(
	'label'       => __('Sidepanel Small Logo', 'ansmusic'),
	'description' => __('This small logo will be used in the sidepanel.', 'ansmusic'),
	'section'     => 'ansmusic_logo_section',
	'settings'    => 'ansmusic_sidebar_logo',
)));

// Footer Logo Setting
$wp_customize->add_setting('ansmusic_footer_logo', array(
	'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/ans-footer-logo.jpg',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ansmusic_footer_logo_control', array(
	'label'       => __('Footer Logo', 'ansmusic'),
	'description' => __('This logo will appear in the footer.', 'ansmusic'),
	'section'     => 'ansmusic_logo_section',
	'settings'    => 'ansmusic_footer_logo',
)));

// Group Logo first Setting
$wp_customize->add_setting('group_logo_first', array(
	'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/a2im-logo.png',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'group_logo_first_control', array(
	'label'       => __('First Group Logo', 'ansmusic'),
	'description' => __('Membership Group logo First.', 'ansmusic'),
	'section'     => 'ansmusic_logo_section',
	'settings'    => 'group_logo_first',
)));

// Group Logo second Setting
$wp_customize->add_setting('group_logo_second', array(
	'default'           => 'http://localhost/ans-music/wp-content/uploads/2025/02/basis-logo-bd.png',
	'transport'         => 'refresh',
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'group_logo_second_control', array(
	'label'       => __('Second Group Logo', 'ansmusic'),
	'description' => __('Membership Group logo second.', 'ansmusic'),
	'section'     => 'ansmusic_logo_section',
	'settings'    => 'group_logo_second',
)));

    // ======== Section for Colors =========
    $wp_customize->add_section('custom_theme_colors', array(
        'title'    => __('Theme Colors', 'ansmusic'),
        'priority' => 30,
    ));

    // white Color Setting
    $wp_customize->add_setting('clr_white', array(
        'default'   => '#e2e2e2', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_white_control', array(
        'label'    => __('White', 'ansmusic'),
		'description'=>__('This color is used for text, ', 'ansmusic'),
        'section'  => 'custom_theme_colors',
        'settings' => 'clr_white',
    )));  

    // Yellow Color Setting
    $wp_customize->add_setting('clr_yellow', array(
        'default'   => '#fdff4b', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_yellow_control', array(
        'label'    => __('Yellow', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used for button text, border hover link hover effect etc, ', 'ansmusic'),
        'settings' => 'clr_yellow',
    )));

	 // Dark Black Color Setting
	 $wp_customize->add_setting('clr_dark_black', array(
        'default'   => '#050D28', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_dark_black_control', array(
        'label'    => __('Dark Black', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used as background for footer,key services, header sidebar etc, ', 'ansmusic'),
        'settings' => 'clr_dark_black',
    )));

	 // Green Color Setting
	 $wp_customize->add_setting('clr_green', array(
        'default'   => '#098c30', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_green_control', array(
        'label'    => __('Green', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used text color for banner sub title, section sub title etc, ', 'ansmusic'),
        'settings' => 'clr_green',
    )));

	 // Dark Orange Color Setting
	 $wp_customize->add_setting('clr_dark_orange', array(
        'default'   => '#d80032', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_dark_orange_control', array(
        'label'    => __('Dark Orange', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used as text color for banner sub title, section sub title etc, ', 'ansmusic'),
        'settings' => 'clr_dark_orange',
    )));

	 // Neon Magenda Color Setting
	 $wp_customize->add_setting('clr_neon_magenda', array(
        'default'   => '#ea40f7', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_neon_magenda_control', array(
        'label'    => __('Neon Magenda', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used as text color for text hover effect in large text, ', 'ansmusic'),
        'settings' => 'clr_neon_magenda',
    )));

	 // Dark Blue Color Setting
	 $wp_customize->add_setting('clr_dark_blue', array(
        'default'   => '#03091B', // Default color
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clr_dark_blue_control', array(
        'label'    => __('Dark Blue', 'ansmusic'),
        'section'  => 'custom_theme_colors',
		'description'=>__('This color is used as background for body, specific section of pages, sidebar etc ', 'ansmusic'),
        'settings' => 'clr_dark_blue',
    )));
}
add_action('customize_register', 'ans_theme_customize_register');



// insert root custom colors inside root variables of head
function ans_theme_custom_styles() {
    $clr_white = get_theme_mod('clr_white', '#ff6600');
    $clr_yellow = get_theme_mod('clr_yellow', '#007bff');
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



function custom_menu_item_priority($item_id, $item, $depth, $args) {
    $priority = get_post_meta($item_id, '_menu_priority', true);
    ?>
    <p class="field-menu-priority description description-wide">
        <label for="edit-menu-item-priority-<?php echo $item_id; ?>">
            <?php _e('Menu Priority (e.g., first, second, third)', 'your-theme-textdomain'); ?><br>
            <input type="text" id="edit-menu-item-priority-<?php echo $item_id; ?>" class="widefat edit-menu-item-priority" name="menu-item-priority[<?php echo $item_id; ?>]" value="<?php echo esc_attr($priority); ?>">
        </label>
    </p>
    <?php
}
add_action('wp_nav_menu_item_custom_fields', 'custom_menu_item_priority', 10, 4);
