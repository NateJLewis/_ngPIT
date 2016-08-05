<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pit
 */

get_header();

if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post();

		get_template_part( 'components/post/content', get_post_format() );

	endwhile;

	the_posts_navigation();

else:

	get_template_part( 'components/post/content', 'none' );

endif;

get_footer();
