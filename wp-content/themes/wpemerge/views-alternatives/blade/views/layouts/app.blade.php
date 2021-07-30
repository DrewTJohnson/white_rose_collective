<?php
/**
 * Base layout.
 *
 * @package DaisyBootstrap
 */

?>
@include('views.partials.header')

@if (!is_singular())
	@php daisy_bootstrap_the_title( '<h2 class="post-title">', '</h2>' ) @endphp
@endif

@yield('content')

@include('views.partials.sidebar')

@include('views.partials.footer')
