<?php
/**
 * alicia-theme functions and definitions
 *
 * @package alicia-theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'alicia_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function alicia_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on alicia-theme, use a find and replace
	 * to change 'alicia-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'alicia-theme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'alicia-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
	*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'alicia_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // alicia_theme_setup
add_action( 'after_setup_theme', 'alicia_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function alicia_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'alicia-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'alicia_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alicia_theme_scripts() {
	wp_enqueue_style( 'alicia-theme-style', get_template_directory_uri() . '/styles/css/style.css' );

	wp_enqueue_script( 'alicia-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'alicia-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alicia_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

// Remove admin  bar
add_filter('show_admin_bar', '__return_false');

// Clean up versioning of scripts and styles
function ewp_remove_script_version( $src ){
  return remove_query_arg( 'ver', $src );
}
add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );
add_filter( 'edit_post_link', '__return_false' );

// Use latest jQuery verison
if( !is_admin() ){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
	wp_enqueue_script('jquery');
}

// Disable jpeg compression
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

// Remove menu wrappers
	function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
	}
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// Remove edit posts link
add_filter( 'edit_post_link', '__return_false' );

// relative paths for images
function yoursite_get_relative_attachment_path($path)
{
    $paths = (object)parse_url($path);
    return $paths->path;
}

// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="content-img">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

// remove empty p tags
add_filter('the_content', 'remove_empty_p', 20, 1);
function remove_empty_p($content){
    $content = force_balance_tags($content);
    return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

// change default image attachment settings
add_action( 'after_setup_theme', 'default_attachment_display_settings' );

function default_attachment_display_settings() {
	update_option( 'image_default_align', 'none' );
	update_option( 'image_default_link_type', 'none' );
	update_option( 'image_default_size', 'full' );
}

//add featured image
add_theme_support( 'post-thumbnails' ); 

// Add Work custom post type

add_action( 'init', 'register_cpt_work' );

function register_cpt_work() {

    $labels = array( 
        'name' => _x( 'Work', 'work' ),
        'singular_name' => _x( 'Work', 'work' ),
        'add_new' => _x( 'Add New', 'work' ),
        'add_new_item' => _x( 'Add New Work', 'work' ),
        'edit_item' => _x( 'Edit Work', 'work' ),
        'new_item' => _x( 'New Work', 'work' ),
        'view_item' => _x( 'View Work', 'work' ),
        'search_items' => _x( 'Search Work', 'work' ),
        'not_found' => _x( 'No work found', 'work' ),
        'not_found_in_trash' => _x( 'No work found in Trash', 'work' ),
        'parent_item_colon' => _x( 'Parent Work:', 'work' ),
        'menu_name' => _x( 'Work', 'work' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'work', $args );
}

// Remove slug from Work custom post type

function custom_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'work' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );

function custom_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'work', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'custom_parse_request_tricksy' );

// Add ACF options page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}