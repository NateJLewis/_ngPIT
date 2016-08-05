<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head><?php

		get_template_part( 'components/head/head', 'meta' );

		get_template_part( 'components/head/head', 'favicons' );

		wp_head();

	?></head>

	<body <?php body_class( 'header_tall' ); ?>>
		<header id="main-header" class="navbar-full navbar-dark" role="banner"><?php

			get_template_part( 'components/navs/nav', 'main' );

		?></header>
		<main id="stage" class="container-fluid site-stage">
			<aside id="sidebar-nav" class="hidden-md-up main-nav sidebar fold"><?php
				get_template_part( 'components/navs/nav', 'sidebar' );
			?></aside><?php
				if( ! is_user_logged_in() ):
			?><aside id="login-register" class="account sidebar fold"><?php
				get_template_part( 'components/navs/nav', 'account' );
			?></aside><?php
				endif;
