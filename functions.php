<?php
/**
 * agencylangerandfriends functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agencylangerandfriends
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function agencylangerandfriends_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on agencylangerandfriends, use a find and replace
		* to change 'agencylangerandfriends' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'agencylangerandfriends', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'agencylangerandfriends' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'agencylangerandfriends_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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
add_action( 'after_setup_theme', 'agencylangerandfriends_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function agencylangerandfriends_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'agencylangerandfriends_content_width', 640 );
}
add_action( 'after_setup_theme', 'agencylangerandfriends_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function agencylangerandfriends_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'agencylangerandfriends' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'agencylangerandfriends' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'agencylangerandfriends_widgets_init' );


// function to register styles
function agencylangerandfriends_regsiter_styles(){
    $version = wp_get_theme()->get('Version'); // Get version defined in style.css
    wp_enqueue_style('agencylangerandfriends_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",array(), '5.1.3', 'all');
    wp_enqueue_style('agencylangerandfriends_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css",array(), '6.0.0', 'all');
	wp_enqueue_style('agencylangerandfriends_swiper',"https://unpkg.com/swiper/swiper-bundle.min.css",array(), $version, 'all');
	wp_enqueue_style('agencylangerandfriends_imggalarystyle',get_template_directory_uri() . "/assets/css/header&footer.css",array(), $version, 'all');
    wp_enqueue_style('langerandfriends_style',get_template_directory_uri() . "/style.css",array(), $version, 'all');
}

// Run our function at the time of Wordpress wp_enqueue_scripts
add_action('wp_enqueue_scripts','agencylangerandfriends_regsiter_styles');

/**
 * Enqueue scripts and styles.
 */
function agencylangerandfriends_scripts() {
	$version = wp_get_theme()->get('Version');
    wp_enqueue_script('agencylangerandfriends_jquery',"https://code.jquery.com/jquery-3.6.0.min.js",array(), '3.6.0', true);
	wp_enqueue_script('agencylangerandfriends_popperscript',"https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js",array(), '1.14.3', 'all');
	wp_enqueue_script('agencylangerandfriends_bootstrapscript',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",array(), '5.1.3', 'all');
    wp_enqueue_script('agencylangerandfriends_script',get_template_directory_uri() . "/assets/js/main.js",array(), $version, 'all');
}
add_action( 'wp_enqueue_scripts', 'agencylangerandfriends_scripts' );

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

// For dynamic Menus
function agencylangerandfriends_menus(){
	$locations = array(
        'header' => "Header Menu",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init','agencylangerandfriends_menus');