<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php

	if (have_posts()) :
		while (have_posts()) :
			the_post();
	?>

			<!-- START OF CONTENT -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
					<p><?php echo wp_kses_post(get_field('introduction')); ?></p>

					<a href="#">View Events</a>
					<div class="acf-gallery">

						<?php echo wp_kses_post(get_field('gallery'));	?>

					</div>
					<p><?php echo wp_kses_post(get_field('description')); ?></p>

					<?php
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
			</article><!-- #post-<?php the_ID(); ?> -->


			<!-- END OF CONTENT -->

	<?php
		endwhile; // end while
	endif; // end if

	?>

</main><!-- #main -->

<?php

get_footer();
