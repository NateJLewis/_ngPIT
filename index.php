<?php
/**
 * @package _ngPIT
 */
if ( is_page( 'admin' ) ) :

	get_header( 'admin' );

else:

	get_header();

endif;

if ( is_page( 'admin' ) ) :

	?><main class="container m-y-3" style="min-height: 75vh;">
		<section class="row around-xs center-xs middle-xs"><?php

		get_template_part( 'components/admin/content', 'admin_dashboard' );

		?></section>
	</main><?php

else:

?><main id="main-content" ui-view></main><?php

endif;

if ( is_page( 'admin' ) ) :

	get_footer( 'admin' );

else:

	get_footer();

endif;
