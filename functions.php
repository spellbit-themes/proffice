<?php
/**
 * proffice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package proffice
 */

if ( ! function_exists( 'sb_proffice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sb_proffice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on proffice, use a find and replace
		 * to change 'sb_proffice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sb_proffice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'sb_proffice' ),
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
		add_theme_support( 'custom-background', apply_filters( 'sb_proffice_custom_background_args', array(
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
			'height'      => 45,
			'width'       => 95,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// post-format supports
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );


		// blog image
		add_image_size('blog-image', 698, 275.517, true);		

		// blog image full
		add_image_size('blog-full-image', 1078, 425.517, true);

		// blog thumb size
		add_image_size('blog-thumb', 320, 216.2, true);

		// brand logo
		add_image_size('brand-thumb', 192, 124.8, true);

		// slide image
		add_image_size('slide_full_image', 1900, 800, true);

		// page title backgrond image
		add_image_size('page_title_bg_full', 1900, 300, true);

	}
endif;
add_action( 'after_setup_theme', 'sb_proffice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sb_proffice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sb_proffice_content_width', 640 );
}
add_action( 'after_setup_theme', 'sb_proffice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sb_proffice_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'sb_proffice' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add footer content from here.', 'sb_proffice' ),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-12 align-self-center %2$s">
                <div class="single-footer">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="footer-titile">',
		'after_title'   => '</h2>',
	) );

	// default sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'sb_proffice' ),
		'id'            => 'default-widget',
		'description'   => esc_html__( 'This is default sidebar for single page,  blog, single post sidebar', 'sb_proffice' ),
		'before_widget' => '<div class="card custuom-single-card">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div><div class="card-body">',
	) );

}
add_action( 'widgets_init', 'sb_proffice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sb_proffice_scripts() {
	wp_enqueue_style( 'sb_proffice-style', get_stylesheet_uri() );

	// Fontawesome CDN
	wp_enqueue_style( 'fontawesomne', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), null );

	//Custom Font
	wp_enqueue_style( 'sb_proffice_font', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', array(), null );

	// Plugin CSS
	wp_enqueue_style( 'sb_proffice_plug', get_theme_file_uri().'/assets/css/plugins.css', array(), '3.6.0' );

	// App CSS
	wp_enqueue_style( 'sb_proffice_app', get_theme_file_uri().'/assets/css/app.css', array(), null );


	//plugins JS
	wp_enqueue_script( 'plug_js', get_theme_file_uri() . '/assets/js/plugins.js', array('jquery'), '4.4.5', true );

	//app JS
	wp_enqueue_script( 'app_js', get_theme_file_uri() . '/assets/js/app.js', array('jquery'), NULL, true );

	wp_enqueue_script( 'sb_proffice-navigation', get_theme_file_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sb_proffice-skip-link-focus-fix', get_theme_file_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sb_proffice_scripts' );


//Add custom icon on customizer menu
function sb_proffice_custom_customize_enqueue() {
	wp_enqueue_style( 'sb_customizer-css', get_theme_file_uri() . '/assets/css/customizer-css.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'sb_proffice_custom_customize_enqueue' );

// Default menu
function sb_proffice_default_menu(){

	echo "<ul><li class='current-menu-item'><a href='".home_url()."'> Home</a></li></ul>";
}



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

/******************
 * Starting kirki configuration from here
 ******************/
if ( ! class_exists( 'Kirki' ) ) {
	include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
}
function proffice_customizer_config() {
	$args = array(

		'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/',

	);
	return $args;
}
add_filter( 'kirki/config', 'proffice_customizer_config' );

/**
 * Theme Option file.
 */
require get_template_directory() . '/inc/theme-options.php';