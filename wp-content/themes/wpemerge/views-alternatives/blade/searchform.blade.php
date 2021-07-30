<?php
/**
 * Search form partial.
 *
 * @link https://codex.wordpress.org/Styling_Theme_Forms#The_Search_Form
 *
 * @package DaisyBootstrap
 */

?>
<form action="{{ esc_url( home_url( '/' ) ) }}" class="search-form" method="get" role="search">
	<label for="s">
		<span class="screen-reader-text">{{ __( 'Search for:', 'daisy_bootstrap' ) }}</span>

		<input type="text" title="{{ __( 'Search for:', 'daisy_bootstrap' ) }}" name="s" value="" id="s" placeholder="{{ __( 'Search &hellip;', 'daisy_bootstrap' ) }}" class="search-form__field" />
	</label>

	<input type="submit" value="{{ __( 'Search', 'daisy_bootstrap' ) }}" class="search-form__submit-button screen-reader-text" />
</form>
