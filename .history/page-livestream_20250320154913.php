<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<!-- entry content -->
		<div class="entry-content">
			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

			</div>
			<section>
				<h2>Our Service Times</h2>
				<div>
					<div><span>9:20 AM</span>Orthros (Matins)</div>
					<div><span>10:20 AM</span>Divine Liturgy</div>
				</div>
			</section>
			<section>
				<h2>Past Streams</h2>
				<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

				</div>
			</section>
			<div>
				<div>
					<h2>Follow on Facebook</h2>
					<a href="#">St.Philip Facebook <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
				</div>
				<div>
					<h2>Subscribe on YouTube</h2>
					<a href="#">St.Philip Youtube <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
				</div>
			</div>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		<!-- .entry-content -->

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
	</article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
