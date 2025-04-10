<?php

/**
 * The template for displaying the WooCommerce cart page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<section id="cart-page" <?php post_class(); ?>>
		<?php if (have_posts()) : ?>
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post(); ?>

					<header class="entry-header">
						<?php
						if (is_singular()) :
							the_title('<h1 class="entry-title">', '</h1>');
						else :
							the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
						endif;

						if ('post' === get_post_type()) :
						?>
							<div class="entry-meta">
								<?php
								st_philip_posted_on();
								st_philip_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<?php st_philip_post_thumbnail(); ?>

					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'st_philip'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php st_philip_entry_footer(); ?>
					</footer><!-- .entry-footer -->
			<?php endwhile; ?>

		<?php endif ?>
	</section><!-- #post-<?php the_ID(); ?> -->

</main><!-- #main -->

<?php
get_footer();
?>