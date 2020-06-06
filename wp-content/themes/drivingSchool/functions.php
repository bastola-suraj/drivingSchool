<?php
/**
 * drivingSchool functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drivingSchool
 */

if ( ! function_exists( 'drivingschool_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function drivingschool_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on drivingSchool, use a find and replace
		 * to change 'drivingschool' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'drivingschool', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'drivingschool' ),
				'header-menu' => esc_html__( 'Header Menu', 'drivingschool' ),
				'sticky-menu' => esc_html__( 'Sticky Menu', 'drivingschool' ),
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
				'drivingschool_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'drivingschool_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drivingschool_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'drivingschool_content_width', 640 );
}
add_action( 'after_setup_theme', 'drivingschool_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drivingschool_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'drivingschool' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'drivingschool' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'drivingschool_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drivingschool_scripts() {
	wp_enqueue_style( 'drivingschool-style', get_stylesheet_uri(), array(), time() );
	wp_style_add_data( 'drivingschool-style', 'rtl', 'replace' );

	wp_enqueue_script( 'drivingschool-navigation', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('bootstrap.css',get_template_directory_uri().'/assets/css/bootstrap.css',array(),time(),'all');
	wp_enqueue_style('revolution-slider.css',get_template_directory_uri().'/assets/css/revolution-slider.css',array(),time(),'all');
	wp_enqueue_style('style.css',get_template_directory_uri().'/assets/css/style.css',array(),time(),'all');
	wp_enqueue_style('custom.css',get_template_directory_uri().'/assets/css/custom.css',array(),time(),'all');
	wp_enqueue_style('responsive.css',get_template_directory_uri().'/assets/css/responsive.css',array(),time(),'all');

	wp_enqueue_script( 'jquery.js', get_template_directory_uri().'/assets/js/jquery.js', array(), time(), 'true' );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), time(), 'true' );
	wp_enqueue_script( 'revolution.min.js', get_template_directory_uri().'/assets/js/revolution.min.js', array(), time(), 'true' );
	wp_enqueue_script( 'jquery.fancybox.pack.js', get_template_directory_uri().'/assets/js/jquery.fancybox.pack.js', array(), time(), 'true' );
	wp_enqueue_script( 'jquery.fancybox-media.js', get_template_directory_uri().'/assets/js/jquery.fancybox-media.js', array(), time(), 'true' );
	wp_enqueue_script( 'owl.js', get_template_directory_uri().'/assets/js/owl.js', array(), time(), 'true' );
	wp_enqueue_script( 'appear.js', get_template_directory_uri().'/assets/js/appear.js', array(), time(), 'true' );
	wp_enqueue_script( 'wow.js', get_template_directory_uri().'/assets/js/wow.js', array(), time(), 'true' );
	wp_enqueue_script( 'script.js', get_template_directory_uri().'/assets/js/script.js', array(), time(), 'true' );
	wp_enqueue_script( 'map-script.js', get_template_directory_uri().'/assets/js/map-script.js', array(), time(), 'true' );
}
add_action( 'wp_enqueue_scripts', 'drivingschool_scripts' );

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
 * Implement the Custom Post Types.
 */
require get_template_directory() . '/cpts/banners.php';

/**
 * Implement the Custom Meta options from Codestar.
 */
require get_template_directory() . '/codestar/banner-options.php';


