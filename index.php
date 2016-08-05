<?php
/**
 * The main template file.
 *
 * @package _pit
 */
get_header();
if ( have_posts() ) :

	if ( is_page( 'products' ) ):

		$products = new WP_Query( array(
			'post_type' => 'product'
		) );

		?><div class="row around-xs center-xs top-xs">
			<div class="col-xs-12">
				<section class="card-deck"><?php

					while ( $products->have_posts() ):

						$products->the_post();

						get_template_part( 'components/posts/content', 'products' );

					endwhile;

				?></section>
			</div>
		</div><?php

	endif;
	wp_reset_query();

	if ( is_page( 'projects' ) ):

		$projects = new WP_Query( array(
			'post_type' => 'project'
		) );

		?><div class="row around-xs center-xs top-xs">
			<div class="col-xs-12">
				<section class="card-group"><?php

					while ( $projects->have_posts() ):

						$projects->the_post();

						get_template_part( 'components/posts/content', 'projects' );

					endwhile;

				?></section>
			</div>
		</div><?php

	endif;
	wp_reset_query();

	if ( is_page( 'tutorials' ) ):

		$tutorials = new WP_Query( array(
			'post_type' => 'tutorial'
		) );
		
		?><div class="row around-xs center-xs top-xs">
			<div class="col-xs-12">
				<section class="card-group"><?php

					while ( $tutorials->have_posts() ):

						$tutorials->the_post();

						get_template_part( 'components/posts/content', 'tutorials' );

					endwhile;

				?></section>
			</div>
		</div><?php
	endif;
	wp_reset_query();

	if ( is_page( 'snippets' ) ):

		$snippets = new WP_Query( array(
			'post_type' => 'snippet'
		) );
		?><div class="row around-xs center-xs top-xs">
			<div class="col-xs-12">
				<section class="card-columns"><?php

					while ( $snippets->have_posts() ):

						$snippets->the_post();

						get_template_part( 'components/posts/content', 'snippets' );

					endwhile;

				?></section>
			</div>
		</div><?php
	endif;
	wp_reset_query();

	while ( have_posts() ) :

		the_post();

		get_template_part( 'components/post/content', get_post_format() );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'components/post/content', 'none' );

endif;
get_footer();
