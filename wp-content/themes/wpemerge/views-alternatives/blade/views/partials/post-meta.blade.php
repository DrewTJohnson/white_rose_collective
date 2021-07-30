<?php
/**
 * Displays the post date/time, author, tags, categories and comments link.
 *
 * Should be called only within The Loop.
 *
 * It will be displayed only for post type "post".
 *
 * @package DaisyBootstrap
 */

?>
@if ( get_post_type() === 'post' )
	<div class="article__meta">
		<p>
			{{ get_the_time( 'F jS, Y ' ) }}
			{{-- translators: post author attribution --}}
			{{ sprintf( __( 'by %s', 'daisy_bootstrap' ), get_the_author() ) }}
		</p>

		<p>
			{{ __( 'Posted in ', 'daisy_bootstrap' ) }}
			@php the_category( ', ' ) @endphp
			@if (comments_open())
				<span> | </span>
				@php comments_popup_link( __( 'No Comments', 'daisy_bootstrap' ), __( '1 Comment', 'daisy_bootstrap' ), __( '% Comments', 'daisy_bootstrap' ) ) @endphp
			@endif
		</p>

		@php the_tags( '<p>' . __( 'Tags:', 'daisy_bootstrap' ) . ' ', ', ', '</p>' ) @endphp
	</div>
@endif