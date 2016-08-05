<?php
/**
 * Enqueue scripts and styles.
 */
function _pit_scripts() {

	$theme_dir 	  = get_template_directory_uri() . '/';
	$scripts_dir  = $theme_dir . 'assets/scripts';
	$styles_dir   = $theme_dir . 'assets/styles';
	$dev_css_dir  = $styles_dir . '/css';

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic|Roboto+Slab:400,300' );
	wp_enqueue_style( 'pit-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pit-dev', $dev_css_dir . '/dev.css' );

	wp_enqueue_script( 'pit-libs', $scripts_dir . '/pit-libs.js', array('jquery'), '', true );
	wp_enqueue_script( 'pit-app', $scripts_dir . '/pit-app.js', array('jquery', 'pit-libs'), '', true );

	global $wp_rest_server;
	if ( empty( $wp_rest_server ) ) {
		$wp_rest_server_class = apply_filters( 'wp_rest_server_class', 'WP_REST_Server' );
		$wp_rest_server = new $wp_rest_server_class();
		do_action( 'rest_api_init', $wp_rest_server );
	}

	$products_request = new WP_REST_Request( 'GET', '/wp/v2/products' );
	$products_response = $wp_rest_server->dispatch( $products_request );
	$products = null;
	if ( ! $products_response->is_error() ) {
		$products = $products_response->get_data();
	}

	$projects_request = new WP_REST_Request( 'GET', '/wp/v2/projects' );
	$projects_response = $wp_rest_server->dispatch( $projects_request );
	$projects = null;
	if ( ! $projects_response->is_error() ) {
		$projects = $projects_response->get_data();
	}

	$tutorials_request = new WP_REST_Request( 'GET', '/wp/v2/tutorials' );
	$tutorials_response = $wp_rest_server->dispatch( $tutorials_request );
	$tutorials = null;
	if ( ! $tutorials_response->is_error() ) {
		$tutorials = $tutorials_response->get_data();
	}

	$snippets_request = new WP_REST_Request( 'GET', '/wp/v2/snippets' );
	$snippets_response = $wp_rest_server->dispatch( $snippets_request );
	$snippets = null;
	if ( ! $snippets_response->is_error() ) {
		$snippets = $snippets_response->get_data();
	}

	$posts_request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
	$posts_response = $wp_rest_server->dispatch( $posts_request );
	$posts = null;
	if ( ! $posts_response->is_error() ) {
		$posts = $posts_response->get_data();
	}
	$form_html = array(
		'checkout_form'  => _pit_get_checkout_form_html(),
		'register_form'  => _pit_get_register_form_html(),
		'contact_form'   => _pit_get_subscribe_form_html(),
		'subscribe_form' => _pit_get_subscribe_form_html()
	);
	wp_localize_script( 'pit-app',
		'pitApi',
		array(
			'site_url'   => get_site_url().'/',
			'json_url'   => esc_url_raw( get_rest_url() ),
			'api_url'    => esc_url_raw( get_rest_url() ) . 'wp/v2/',
			'is_admin'   => current_user_can( 'administrator' ),
			'nonce'      => wp_create_nonce( 'wp_rest' ),
			'posts'      => $posts,
			'products'   => $products,
			'projects'   => $projects,
			'tutorials'  => $tutorials,
			'snippets'   => $snippets,
			'form_html'  => $form_html,
		)
	);

}
add_action( 'wp_enqueue_scripts', '_pit_scripts' );

function _pit_get_checkout_form_html() {
	$checkout_form_endpoint = esc_url_raw( get_rest_url() ) . 'frm/v2/forms/14?return=html';
	$curl = curl_init( $checkout_form_endpoint );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
	$checkout_form_response = curl_exec( $curl );
	curl_close( $curl );
	$checkout_form = json_decode( $checkout_form_response, true );
	return $checkout_form;

}
//
function _pit_get_register_form_html() {
	$register_form_endpoint = esc_url_raw( get_rest_url() ) . 'frm/v2/forms/16?return=html';
	$curl = curl_init( $register_form_endpoint );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
	$register_form_response = curl_exec( $curl );
	curl_close( $curl );
	$register_form = json_decode( $register_form_response, true );
	return $register_form;
}
//
function _pit_get_contact_form_html() {
	$contact_form_endpoint = esc_url_raw( get_rest_url() ) . 'frm/v2/forms/6?return=html';
	$curl = curl_init( $contact_form_endpoint );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
	$contact_form_response = curl_exec( $curl );
	curl_close( $curl );
	$contact_form = json_decode( $contact_form_response, true );
	return $contact_form;
}
//
function _pit_get_subscribe_form_html() {
	$subscribe_form_endpoint = esc_url_raw( get_rest_url() ) . 'frm/v2/forms/15?return=html';
	$curl = curl_init( $subscribe_form_endpoint );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
	$subscribe_form_response = curl_exec( $curl );
	curl_close( $curl );
	$subscribe_form = json_decode( $subscribe_form_response, true );
	return $subscribe_form;
}

add_filter( 'style_loader_src', '_pit_remove_script_version', 15, 1 );
add_filter( 'script_loader_src', '_pit_remove_script_version', 15, 1 );
function _pit_remove_script_version( $src ) {
    $parts = explode( '?ver', $src );
    return $parts[0];
}

function _pit_replace_jquery() {
    if ( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '2.2.4' );
        wp_enqueue_script( 'jquery' );
    }
}

add_action( 'init', '_pit_replace_jquery' );
