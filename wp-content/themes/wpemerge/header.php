<?php
/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DaisyBootstrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php daisy_bootstrap_shim_wp_body_open(); ?>

		<div class="nav-container">
			<div class="main-nav">
				<?php \DaisyBootstrap::render( 'views/partials/logo' ); ?>
				<nav>
					<?php \DaisyBootstrap::render( 'views/partials/top-navigation' ); ?>
				</nav>
			</div>
		</div>
		
