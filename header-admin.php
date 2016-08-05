<?php
if( ! is_user_logged_in() ) :
	wp_redirect( home_url() );
	exit;
endif;


/**
 * The header for our theme.
 *
 * @package _tvk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php
		
		add_action( 'wp_print_styles', '_tvk_deregister_admin_styles', 999 );
		function _tvk_deregister_admin_styles() {
			wp_deregister_style( 'wp-admin' );
		}
		acf_form_head();

		wp_head();

	?></head>
	<body id="admin" <?php body_class( 'header_tall admin_dashboard' ); ?>>

		<!-- ACF HEADER -->
		<header id="main-header" class="navbar-full navbar-light white" role="banner"><?php

			get_template_part( 'components/navs/nav', 'main' );

		?></header>
		<aside id="mobile-nav" class="hidden-md-up mobile_nav drawer dw-xs-12 dw-md-6 fold"><?php

			get_template_part( 'components/sidebar/content', 'mobile_nav' );

		?></aside>
		<aside id="create-product" class="drawer drawer-right dw-xs-12 fold"><?php

			get_template_part( 'components/admin/content', 'create_product' );

		?></aside>
		<aside id="create-post" class="drawer drawer-right dw-xs-12 fold"><?php

			get_template_part( 'components/admin/content', 'create_post' );

		?></aside><?php
