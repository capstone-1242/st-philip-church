<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php st_philip_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if (function_exists('is_woocommerce') && (is_shop() || is_product() || is_product_category() || is_product_tag())) {
			if (is_active_sidebar('sidebar-1')) {
		?>
				<aside id="woocommerce-sidebar" class="widget-area">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</aside><!-- #woocommerce-sidebar -->
		<?php
			}
		}
		?>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'st_philip'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</section><!-- #post-<?php the_ID(); ?> -->