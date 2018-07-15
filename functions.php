<?php
/**
 * testing line
 * proffice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package proffice
 */

if ( ! function_exists( 'proffice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function proffice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on proffice, use a find and replace
		 * to change 'proffice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'proffice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'proffice' ),
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
		add_theme_support( 'custom-background', apply_filters( 'proffice_custom_background_args', array(
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

		// Added stylesheet for editor
		add_editor_style();
/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function proffice_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Read More', 'proffice' )
    );
}
add_filter( 'excerpt_more', 'proffice_excerpt_more' );
	}
endif;
add_action( 'after_setup_theme', 'proffice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function proffice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'proffice_content_width', 640 );
}
add_action( 'after_setup_theme', 'proffice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function proffice_widgets_init() {

	// Footer sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'proffice' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add footer content from here.', 'proffice' ),
		'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 col-12 align-self-center %2$s">
                <div class="single-footer">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="footer-titile">',
		'after_title'   => '</h2>',
	) );

	// Blog sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'proffice' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'This is default sidebar for blog, single post sidebar', 'proffice' ),
		'before_widget' => '<div class="card custuom-single-card">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div>',
	) );
	// default sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'proffice' ),
		'id'            => 'page-sidebar',
		'description'   => esc_html__( 'This is default sidebar for single page', 'proffice' ),
		'before_widget' => '<div class="card custuom-single-card">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'proffice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function proffice_scripts() {
	wp_enqueue_style( 'proffice-style', get_stylesheet_uri() );

	// Fontawesome CDN
	wp_enqueue_style( 'fontawesomne', get_theme_file_uri().'/assets/css/font-awesome.css', array(), null );

	//Custom Font
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', array(), null );

	// Plugin CSS
	wp_enqueue_style( 'proffice-plug', get_theme_file_uri().'/assets/css/plugins.css', array(), '3.6.0' );

	// App CSS
	wp_enqueue_style( 'proffice-app', get_theme_file_uri().'/assets/css/app.css', array(), null );


	//plugins JS
	wp_enqueue_script( 'plug-js', get_theme_file_uri() . '/assets/js/plugins.js', array('jquery'), '4.4.5', true );

	//app JS
	wp_enqueue_script( 'app-js', get_theme_file_uri() . '/assets/js/app.js', array('jquery'), NULL, true );

	wp_enqueue_script( 'proffice-navigation', get_theme_file_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'proffice-skip-link-focus-fix', get_theme_file_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'proffice_scripts' );


//Add custom icon on customizer menu
function proffice_custom_customize_enqueue() {
	wp_enqueue_style( 'proffice-customizer-css', get_theme_file_uri() . '/assets/css/customizer-css.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'proffice_custom_customize_enqueue' );


//Add page banner background image
function proffice_single_page_banner() {
	if(is_page()){
// Get Featured image url
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
    $image = $image_array[0];
else :
    $image = get_template_directory_uri().'/assets/images/slider/page-banner.jpg';
endif;
    ?>
    <style>
        .banner-arae{
            background-image: url(<?php echo esc_url($image); ?>);
        }
    </style>
<?php }elseif (is_home()) { ?>

	<style>
        .banner-arae.banner-area-blog{
            background-image: url(<?php echo header_image(); ?>);
        }
    </style>

<?php } }
add_action( 'wp_head', 'proffice_single_page_banner' );

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
	include_once( dirname( __FILE__ ) . '/inc/sp-fileds/proffice-special-fields.php' );
}
function proffice_customizer_config() {
	$args = array(

		'url_path'     => get_stylesheet_directory_uri() . '/inc/sp-fileds',

	);
	return $args;
}
add_filter( 'kirki/config', 'proffice_customizer_config' );

/**
 * Theme Option file.
 */
require get_template_directory() . '/inc/theme-options.php';