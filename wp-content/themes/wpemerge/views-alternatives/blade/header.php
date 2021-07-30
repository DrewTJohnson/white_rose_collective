<?php
/**
 * This file is required by WordPress. Delegates the actual rendering to header.blade.php.
 *
 * @package DaisyBootstrap
 * phpcs:disable
 */
add_filter( 'wpemerge.partials.header.hook', '__return_false' );
\DaisyBootstrap::render( 'views.partials.header' );
remove_filter( 'wpemerge.partials.header.hook', '__return_false' );
