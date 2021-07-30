<?php
/**
 * Generic error fallback view for admin requests.
 * Used if no view is found for the current error status code.
 *
 * @package DaisyBootstrap
 */

?>
<p>
	{!!
	sprintf(
		/* translators: generic error page content; placeholders represents homepage opening and closing anchor tags */
		esc_html__( 'Please check the URL for proper spelling and capitalization. If you\'re having trouble locating a destination, try visiting the %1$shome page%2$s.', 'daisy_bootstrap' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '">',
		'</a>'
	)
	!!}
</p>
