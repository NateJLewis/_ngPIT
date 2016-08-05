<?php
/**
 * The header for our theme.
 *
 * @package _tvk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="ngPITApp">
	<head><?php
		get_template_part( 'components/head/head', 'meta' );
		get_template_part( 'components/head/head', 'favicons' );
		wp_head();
	?></head>
	<body id="tvk-app" <?php body_class( 'header_tall' ); ?>>

		<!-- Default / Home Header -->
		<header id="main-header" class="navbar-full navbar-light white" role="banner"><?php

			get_template_part( 'components/navs/nav', 'main' );

		?></header>
		<aside id="mobile-nav" class="hidden-md-up mobile_nav drawer dw-xs-12 dw-md-6 fold"><?php

			get_template_part( 'components/sidebar/content', 'mobile_nav' );

		?></aside><?php

		if( ! is_user_logged_in() ) :

    		?><aside id="login" class="login drawer drawer-right fold"><?php
    			get_template_part( 'components/sidebar/content', 'login' );
    		?></aside><?php

		endif;

		if( is_user_logged_in() ) :

			?><aside id="orders" class="orders drawer drawer-right dw-xs-12 fold"><?php

    			get_template_part( 'components/sidebar/content', 'orders' );

    		?></aside>
			<aside id="account" class="account drawer drawer-right dw-xs-12 fold"><?php

    			get_template_part( 'components/sidebar/content', 'account' );

    		?></aside><?php

        endif;

		?>
