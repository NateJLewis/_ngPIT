<?php
/**
 * The template for displaying the footer.
 *
 * @package _pit
 */

?>
		</main>
		<footer id="" class="site-footer container-fluid" role="contentinfo">
			<section class="row around-xs center-xs top-xs">
				<div class="col-xs-12 col-md-6 site_links"><?php

					get_template_part( 'components/footer/site', 'links' );

				?></div>
				<div class="col-xs-12 col-md-6 site_forms"><?php

					get_template_part( 'components/footer/site', 'forms' );

				?></div>
			</section>
			<section class="row around-xs center-xs top-xs site_identities"><?php

				get_template_part( 'components/footer/site', 'info' );

			?></section>
		</footer><?php

			wp_footer();

	?></body>
</html>
