<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DaisyBootstrap
 */

?>
		<div class="ftr">
			<div class="ftr-wrap">
				<div class="logo-wrap">
					<?php \DaisyBootstrap::render( 'views/partials/logo' ); ?>
				</div>
				<div class="ftr-menu">
					<?php \DaisyBootstrap::render( 'views/partials/footer-navigation' ); ?>
				</div>
				<div class="copyright">
					<p>Copyright Daisy Development 2021 ©</p>
				</div>
			</div>
		</div>
	</body>
</html>
