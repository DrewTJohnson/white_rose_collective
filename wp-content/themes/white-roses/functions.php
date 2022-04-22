<?php
/**
 * White Roses functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package White_Roses
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
function white_roses_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on White Roses, use a find and replace
		* to change 'white-roses' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'white-roses', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'white-roses' ),
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
			'white_roses_custom_background_args',
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
add_action( 'after_setup_theme', 'white_roses_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function white_roses_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'white_roses_content_width', 640 );
}
add_action( 'after_setup_theme', 'white_roses_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function white_roses_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'white-roses' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'white-roses' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'white_roses_widgets_init' );

function white_roses_add_post_meta_boxes() {
	add_meta_box(
		'show-page-title',
		__( 'Show Page Title' ),
		'white_roses_show_title_meta_box',
		'page',
		'side',
		'default'
	);
	add_meta_box(
		'custom-page-title',
		__( 'Custom Page Title' ),
		'white_roses_custom_title_meta_box',
		'page',
		'side',
		'default'
	);
}

function white_roses_show_title_meta_box( $post ) {
	global $post;
	$custom = get_post_custom( $post->ID );
	$white_roses_meta_box_show_title = $custom["show-page-title"][0];
	$custom_value = get_post_meta( $post->ID, 'show-page-title', true );

	?>
	
		<?php if( $custom_value == "yes" ) $field_checked = 'checked="checked"'; ?>
		<input type="checkbox" id="showTitle" name="show-page-title" value="yes" <?php echo $field_checked; ?> />
		<label for="showTitle"><?php _e( 'Show Page Title?' ); ?></label>
	<?php
}

function white_roses_custom_title_meta_box( $post ) {
	global $post;
	$custom = get_post_custom( $post->ID );
	$white_roses_meta_box_custom_title = $custom["custom-page-title"][0];
	$custom_value = get_post_meta( $post->ID, 'custom_page_title', true );

	?>
		<input type="text" id="customTitle" name="custom-page-title" value="<?php echo $white_roses_meta_box_custom_title; ?>" />
	<?php

}

function white_roses_save_show_title_meta() {
	global $post;

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return $post->ID;
	}

	update_post_meta( $post->ID, "show-page-title", $_POST["show-page-title"] );
	update_post_meta( $post->ID, "custom-page-title", $_POST["custom-page-title"] );
}

function white_roses_post_meta_boxes_setup() {

	add_action( 'add_meta_boxes', 'white_roses_add_post_meta_boxes' );

	add_action( 'save_post', 'white_roses_save_show_title_meta', 10, 2);
}

add_action( 'load-post.php', 'white_roses_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'white_roses_post_meta_boxes_setup' );

/**
 * Enqueue scripts and styles.
 */
function white_roses_scripts() {
	wp_enqueue_style( 'white-roses-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'white-roses-style', 'rtl', 'replace' );

	wp_enqueue_script( 'white-roses-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'white_roses_scripts' );

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

