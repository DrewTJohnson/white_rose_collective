<?php
/**
 * Sidebar partial.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @package DaisyBootstrap
 */

?>
<div class="sidebar">
	<ul class="widgets">
		<?php dynamic_sidebar( \DaisyBootstrap::core()->sidebar()->getCurrentSidebarId() ); ?>
	</ul>
</div>
