<?php
/**
 * _ngPIT functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _ngPIT
 */

if ( ! function_exists( '_ngPIT_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _ngPIT_setup() {

	// Make theme available for translation.
	load_theme_textdomain( '_ngPIT', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( '_ngPIT-featured-image', 640, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array( 'primary' => esc_html__( 'Primary', '_ngPIT' ) ) );

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

	require_once get_template_directory() .  '/includes/plugins/class-tgm-plugin-activation.php';
    require_once get_template_directory() .  '/includes/plugins/theme-require-plugins.php';
    add_action( 'tgmpa_register', '_ngPIT_register_required_plugins' );

}
endif;
add_action( 'after_setup_theme', '_ngPIT_setup' );

require get_template_directory() . '/includes/svg/material-design.php';

require get_template_directory() . '/includes/svg/social-media-circles.php';

require get_template_directory() . '/includes/styles-scripts.php';

require get_template_directory() . '/includes/rest-api.php';

require get_template_directory() . '/includes/head.php';

require get_template_directory() . '/includes/admin.php';

require get_template_directory() . '/includes/images.php';
