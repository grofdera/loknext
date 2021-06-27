<?php
/**
 * loknext functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package loknext
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.0' );
}

if ( ! function_exists( 'loknext_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function loknext_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on loknext, use a find and replace
		 * to change 'loknext' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'loknext', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'loknext' ),
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
				'loknext_custom_background_args',
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
add_action( 'after_setup_theme', 'loknext_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loknext_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'loknext_content_width', 640 );
}
add_action( 'after_setup_theme', 'loknext_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loknext_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'loknext' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'loknext' )
		)
	);
}
add_action( 'widgets_init', 'loknext_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function loknext_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'lokbidhi', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('app', tailpress_get_mix_compiled_asset_url('css/app.css'), array(), $theme->get('Version'));
	//wp_enqueue_style('animate', get_template_directory_uri() . '/css/aos.css', array(), _S_VERSION, true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	//wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true);
	wp_enqueue_script('animation', get_template_directory_uri() . '/js/animate.js', array(), _S_VERSION, true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loknext_scripts' );

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

/**Manish codes from here */
/** search form to nav menu */
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args)
{
	if ($args->theme_location == 'menu-1')
		$items .= '<li class="search"><form role="search" method="get" id="searchform" action="' . home_url('/') . '"><div class="flex"><input type="text" placeholder="Search" value="" name="s" id="s" class="w-8/12 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none search-field focus:outline-none focus:shadow-outline" /><input type="submit" class="flex px-4 py-2 ml-auto text-white bg-gray-500 border-0 rounded focus:outline-none hover:bg-gray-600" id="searchsubmit" value="' . esc_attr__('Search') . '" /></div></form></li>';
	return $items;
}
/** remove wp-block-css */
function smartwp_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 9999);

/**
 * Get mix compiled asset.
 *
 * @param string $path The path to the asset.
 *
 * @return string
 */
function tailpress_get_mix_compiled_asset_url($path)
{
	$path                = '/' . $path;
	$stylesheet_dir_uri  = get_stylesheet_directory_uri();
	$stylesheet_dir_path = get_stylesheet_directory();

	if (!file_exists($stylesheet_dir_path . '/mix-manifest.json')) {
		return $stylesheet_dir_uri . $path;
	}

	$mix_file_path = file_get_contents($stylesheet_dir_path . '/mix-manifest.json');
	$manifest      = json_decode($mix_file_path, true);
	$asset_path    = !empty($manifest[$path]) ? $manifest[$path] : $path;

	return $stylesheet_dir_uri . $asset_path;
}
// disable rest api https://wordpress.stackexchange.com/questions/228585/hiding-wordpress-rest-api-v2-endpoints-from-public-viewing
function restrict_rest_api_to_localhost()
{

	$whitelist = ['129.0.0.1', "::1"];

	if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
		die('REST API is disabled.');
	}
}

add_action('rest_api_init', 'restrict_rest_api_to_localhost', 0);
add_filter('rest_url_prefix', function () {
	return 'apikey12345';
});

function wpb_disable_feed()
{
	wp_die(__('No feed available,please visit our <a href="' . get_bloginfo('url') . '">homepage</a>!'));
}

add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
