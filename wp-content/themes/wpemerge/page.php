<?php
/**
 * Layout: views/layouts/app.php
 *
 * This is the template that is used for displaying all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DaisyBootstrap
 */

?>	

<?php if ( is_front_page() ) : ?>
	<div class="pg-wrap">
		<?php daisy_bootstrap_the_title( '<h1 class="homepage-title">', '</h1>'); ?>
		<div class="pg-body">
			<?php the_content(); ?>
		</div>
	</div>
	
<?php else : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div <?php post_class(); ?>>
			<?php daisy_bootstrap_the_title( '<h2 class="post-title">', '</h2>' ); ?>

			<div class="page__content">
				<?php the_content(); ?>

				<?php \DaisyBootstrap::render( 'views/partials/pagination' ); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
