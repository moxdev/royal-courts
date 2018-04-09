<?php
/**
 * Residential One Properties functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Residential_One_Properties
 */

if ( ! function_exists( 'resone_template_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function resone_template_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Residential One Properties, use a find and replace
		 * to change 'resone_template' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'resone_template', get_template_directory() . '/languages' );

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
		add_image_size('home-carousel-slide', 1600, 500, true);
		add_image_size('floorplans', 900, 9999, false);
		add_image_size('gallery', 300, 260, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'resone_template' )
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
add_action( 'after_setup_theme', 'resone_template_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resone_template_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'resone_template_content_width', 640 );
}
add_action( 'after_setup_theme', 'resone_template_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function resone_template_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'resone_template' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'resone_template' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'resone_template_widgets_init' );

/**
 * Custom ACF Options
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
	    'page_title'    => 'Company Information',
	    'menu_title'    => 'Company Information',
	    'menu_slug'     => 'company-information',
	    'post_id'       => 'company-information',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
	acf_add_options_page(array(
	    'page_title'    => 'Social',
	    'menu_title'    => 'Social',
	    'menu_slug'     => 'social',
	    'post_id'       => 'social',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
	acf_add_options_page(array(
	    'page_title'    => 'Specials',
	    'menu_title'    => 'Specials',
	    'menu_slug'     => 'specials',
	    'post_id'       => 'specials',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
	acf_add_options_page(array(
	    'page_title'    => 'Footer',
	    'menu_title'    => 'Footer',
	    'menu_slug'     => 'footer',
	    'post_id'       => 'footer',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
	acf_add_options_page(array(
	    'page_title'    => 'Header',
	    'menu_title'    => 'Header',
	    'menu_slug'     => 'header',
	    'post_id'       => 'header',
	    'capability'    => 'edit_posts',
	    'redirect'      => false
	));
}

/**
 * Register scripts for later use.
 */
function resone_template_register_scripts()  {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // Load the copy of jQuery that comes with WordPress
        // The last parameter set to TRUE states that it should be loaded in the footer.
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, FALSE, TRUE);
    }
}
add_action('init', 'resone_template_register_scripts');

/**
 * Move Yoast to bottom
 */
function yoast_to_bottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoast_to_bottom');

/**
 * Enqueue scripts and styles.
 */
function resone_template_scripts() {
	wp_enqueue_style( 'resone-template-style', get_stylesheet_uri() );

	wp_enqueue_script( 'resone-template-navigation', get_template_directory_uri() . '/js/min/navigation-min.js', array(), '20151215', true );

	wp_enqueue_script( 'resone-template-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if( is_front_page() ) {

	  $addCarousel = get_field('add_a_carousel_to_the_hompage');

	  if($addCarousel == "Yes") {
	    wp_enqueue_script( 'resone-template-images-loaded', get_template_directory_uri() . '/js/min/jquery.imagesloaded.min.js', array('jquery'), '20141217', true );
	    wp_enqueue_script( 'resone-template-image-fill', get_template_directory_uri() . '/js/min/jquery-imagefill.min.js', array('resone-template-images-loaded'), '20141217', true );
	    wp_enqueue_script( 'resone-template-touchswipe-library', get_template_directory_uri() . '/js/min/jquery.touchSwipe.min.js', array('resone-template-image-fill'), '20141217', true );
	    wp_enqueue_script( 'resone-template-home-carousel', get_template_directory_uri() . '/js/min/home-carousel-min.js', array('resone-template-touchswipe-library'), '20141217', true );
	  }
	}

	if( is_page_template( 'page-floorplans.php' ) || is_page_template( 'page-gallery.php' ) ) {
		wp_enqueue_script( 'imagelightbox', get_template_directory_uri() . '/js/min/imagelightbox-min.js', array('jquery'), '20150904', true );
		wp_enqueue_script( 'resone-template-lightbox', get_template_directory_uri() . '/js/min/reslightbox-min.js', array('imagelightbox'), '20150904', true );

	}
}
add_action( 'wp_enqueue_scripts', 'resone_template_scripts' );

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
 * Homepage Carousel.
 */
require get_template_directory() . '/inc/home-slider.php';

/**
 * Include the MM4 Contact Form.
 */

include_once( get_stylesheet_directory() . '/plugins/mm4-you-contact-form/mm4-you-cf.php' );

/**
 * Directions Sidebar Contact Page.
 */
require get_template_directory() . '/inc/sidebar-contact-page.php';

/**
 * Photo Gallery for the Gallery Page.
 */
require get_template_directory() . '/inc/photo-gallery.php';

/**
 * Photo Gallery for the Floor Plans Page.
 */
require get_template_directory() . '/inc/floor-plans.php';

/**
 * Features Sidebar for the Home Page.
 */
require get_template_directory() . '/inc/sidebar-features.php';

/**
 * Specials Sidebar for the Home Page.
 */
require get_template_directory() . '/inc/sidebar-specials.php';

/**
 * Specials Callout for the Floor Plans Page.
 */
require get_template_directory() . '/inc/callout-specials.php';

/**
 * Displays Map for the Community Page.
 */
require get_template_directory() . '/inc/community-map.php';