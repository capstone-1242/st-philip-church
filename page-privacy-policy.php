<?php

/**
 * The template for displaying privacy policy page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post(); ?>

		<section id="privacy-page" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->

			<?php st_philip_post_thumbnail(); ?>

			<div class="entry-content">
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

	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
?>