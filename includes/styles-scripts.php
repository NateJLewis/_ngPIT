<?php
/**
 * Enqueue scripts and styles.
 */
function _ngPIT_scripts() {

	$theme_dir 	  = get_template_directory_uri() . '/';
	$scripts_dir  = $theme_dir . 'assets/scripts';
	$styles_dir   = $theme_dir . 'assets/styles';
	$dev_css_dir  = $styles_dir . '/css';

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic|Roboto+Slab:400,300' );
	wp_enqueue_style( 'ngPIT-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'ngPIT-dev', $dev_css_dir . '/dev.css' );

	wp_enqueue_script( 'ngPIT-libs', $scripts_dir . '/ngPIT-libs.js', array('jquery'), '', true );
	wp_enqueue_script( 'ngPIT-app', $scripts_dir . '/ngPIT-app.js', array('jquery', 'ngPIT-libs'), '', true );

	global $wp_rest_server;
	if ( empty( $wp_rest_server ) ) {
		$wp_rest_server_class = apply_filters( 'wp_rest_server_class', 'WP_REST_Server' );
		$wp_rest_server = new $wp_rest_server_class();
		do_action( 'rest_api_init', $wp_rest_server );
	}

	$posts_request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
	$posts_response = $wp_rest_server->dispatch( $posts_request );
	$posts = null;
	if ( ! $posts_response->is_error() ) {
		$posts = $posts_response->get_data();
	}

	$json_url = get_rest_url();
	$api_url  = $json_url . 'wp/v2/';
	$app_dir  = $theme_dir . 'scripts/app/';
	wp_localize_script( 'ngPIT-app',
		'ngpitApi',
		array(
			'site_url' 		=> get_site_url().'/',
			'app_dir'		=> $app_dir,
			'json_url' 		=> esc_url_raw( $json_url ),
			'api_url'  		=> esc_url_raw( $api_url ),
			'is_admin'		=> current_user_can( 'administrator' ),
			'nonce'    		=> wp_create_nonce( 'wp_rest' ),
			'posts'    		=> $posts,
		)
	);
}
add_action( 'wp_enqueue_scripts', '_ngPIT_scripts' );

add_filter( 'style_loader_src', '_ngPIT_remove_script_version', 15, 1 );
add_filter( 'script_loader_src', '_ngPIT_remove_script_version', 15, 1 );
function _ngPIT_remove_script_version( $src ) {
    $parts = explode( '?ver', $src );
    return $parts[0];
}

function _ngPIT_replace_jquery() {
    if ( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '2.2.4' );
        wp_enqueue_script( 'jquery' );
    }
}

add_action( 'init', '_ngPIT_replace_jquery' );
