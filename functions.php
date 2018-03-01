<?php
/**
 * _hs functions and definitions
 *
 * @package Habefast Starter
 */
 
 /**
  * Store the theme's directory path and uri in constants
  */
 define('THEME_DIR_PATH', get_template_directory());
 define('THEME_DIR_URI', get_template_directory_uri());

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_hs_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _hs_setup() {
	global $cap, $content_width;

	// Add html5 behavior for some theme elements
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_hs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _hs, use a find and replace
	 * to change '_hs' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_hs', THEME_DIR_PATH . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_hs' ),
		) );

}
endif; // _hs_setup
add_action( 'after_setup_theme', '_hs_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _hs_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_hs' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', '_hs_widgets_init' );

/**
 * Register extra widgetized area
 */
function habefast_sidebar() {
	
	// HEADER SIDEBARS
    register_sidebar(
        array (
            'name' => __( 'topbar-widget-1', 'habefast' ),
            'id' => 'topbar-widget-1',
            'description' => __( 'topbar-widget-1', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
    );
    
     register_sidebar(
        array (
            'name' => __( 'topbar-widget-2', 'habefast' ),
            'id' => 'topbar-widget-2',
            'description' => __( 'topbar-widget-2', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
    );
    
     register_sidebar(
        array (
            'name' => __( 'topbar-widget-3', 'habefast' ),
            'id' => 'topbar-widget-3',
            'description' => __( 'topbar-widget-3', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
	);
	
	
	// FOOTER SIDEBARS
    register_sidebar(
        array (
            'name' => __( 'footer-widget-1', 'habefast' ),
            'id' => 'footer-widget-1',
            'description' => __( 'footer-widget-1', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
    );
    
     register_sidebar(
        array (
            'name' => __( 'footer-widget-2', 'habefast' ),
            'id' => 'footer-widget-2',
            'description' => __( 'footer-widget-2', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
    );
    
     register_sidebar(
        array (
            'name' => __( 'footer-widget-3', 'habefast' ),
            'id' => 'footer-widget-3',
            'description' => __( 'footer-widget-3', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
	);
	
	register_sidebar(
        array (
            'name' => __( 'footer-widget-4', 'habefast' ),
            'id' => 'footer-widget-4',
            'description' => __( 'footer-widget-4', 'habefast' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
		    'before_title'  => '<h3 class="widget-title">',
		    'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'habefast_sidebar' );

/**
 * Enqueue scripts and styles
 */
function _hs_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_hs-bootstrap-wp', THEME_DIR_URI . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_hs-bootstrap', THEME_DIR_URI . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_hs-font-awesome', THEME_DIR_URI . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _hs styles
	wp_enqueue_style( '_hs-style', get_stylesheet_uri() );

	// load Habefast styles (SCSS compiled)
	wp_enqueue_style( 'habefast-style', THEME_DIR_URI . '/includes/css/style.css');

	// load bootstrap js
	wp_enqueue_script('_hs-bootstrapjs', THEME_DIR_URI . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_hs-bootstrapwp', THEME_DIR_URI . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_hs-skip-link-focus-fix', THEME_DIR_URI . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_hs-keyboard-image-navigation', THEME_DIR_URI . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_hs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require THEME_DIR_PATH . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require THEME_DIR_PATH . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require THEME_DIR_PATH . '/includes/extras.php';

/**
 * Customizer additions.
 */
require THEME_DIR_PATH . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require THEME_DIR_PATH . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require THEME_DIR_PATH . '/includes/bootstrap-wp-navwalker.php';

/**
 * Adds WooCommerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
