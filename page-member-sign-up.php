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

		<!-- featured image -->
		<?php st_philip_post_thumbnail(); ?>
		<!-- end of featured image -->

		<!-- entry content -->
		<div class="entry-content">

			<p>Welcome to St. Philip’s Antiochian Church—a community where faith, tradition, and family come together. We invite you to join us through one of three membership options:</p>

			<section>
				<h2>Non-Voting Member</h2>
				<p>Stay connected with our church family, receive community updates, and participate in our spiritual and social gatherings.</p>
			</section>

			<section>
				<h2>Voting Member - Single ($250/yr)*</h2>
				<p>Take an active role in the life of St. Philip by supporting our mission and gaining the right to vote on important church matters.</p>
			</section>

			<section>
				<h2>Voting Member - Family 
				($400/yr)</h2>
				<p>Strengthen your family’s involvement in our parish with voting privileges for your household and deeper engagement in our church’s future.</p>
			</section>

			<a href="https://docs.google.com/forms/d/e/1FAIpQLSeF1_uPaD4fO-iOUnSI6cD3LkwhQ27oSOXUJxKqUwY0WbPVzA/viewform" class="fake-button">Continue to Sign Up</a>


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
