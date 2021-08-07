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

	$bgImage = get_the_post_thumbnail_url();
	$toContent = get_field('proceed_to_content');

?>	

<?php if ( is_front_page() ) : ?>
	<div class="home-hero">
		<div class="title-wrap">
			<?php daisy_bootstrap_the_title( '<h1 class="homepage-title">', '</h1>'); ?>
			<div class="homepage-border"></div>
		</div>
		<?php if($toContent) : ?>
			<div class="proceed-to-content">
				<a class="down-arrow" href="#content">
					Test
				</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="pg-wrap" <?php if ($toContent) :?> id="content" <?php endif; ?>>
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
