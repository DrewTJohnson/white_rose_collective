<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package White_Roses
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$page_id = get_the_ID();
		if( !empty( $page_id ) ) {
			$show_title = get_post_meta( $page_id, 'show-page-title', true );
			$custom_title = get_post_meta( $page_id, 'custom-page-title', true );
		}
		$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	?>

	<header class="entry-header">
		<div class="page-hero" style="background-image: url('<?php echo (esc_url( $featured_img_url ) ); ?>');" >
			<?php if( $show_title && !$custom_title ) : ?>
				<div class="title-container">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			<?php elseif( $show_title && $custom_title ) : ?>
				<div class="title-container">
					<?php echo '<h1 class="entry-title">' . $custom_title . '</h1>'; ?>
				</div>
			<?php else : ?>
				<?php the_title( '<h1 class="screen-reader-text">', '</h1>'); ?>
			<?php endif; ?>

		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'white-roses' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
