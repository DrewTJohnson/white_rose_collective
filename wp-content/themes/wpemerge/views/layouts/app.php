<?php
/**
 * Base layout.
 *
 * @link https://docs.wpemerge.com/#/framework/views/layouts
 *
 * @package DaisyBootstrap
 */

\DaisyBootstrap::render( 'header' );

if ( ! is_singular() ) {
	daisy_bootstrap_the_title( '<h2 class="post-title">', '</h2>' );
}

\DaisyBootstrap::layoutContent();

if (!is_front_page() ) {
	\DaisyBootstrap::render( 'sidebar' );
};

\DaisyBootstrap::render( 'footer' );
