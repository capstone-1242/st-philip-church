<?php

/**
 * The template for displaying the Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://www.advancedcustomfields.com/resources/ 
 * @link https://www.w3.org/WAI/ARIA/apg/patterns/landmarks/examples/HTML5.html
 * @link https://www.aditus.io/aria/aria-label/
 *
 * @package st_philip
 * 
 **/

/* Get the header template part*/
get_header();
?>

<main id="primary" class="site-main">

	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<!-- Featured Image -->
		<?php if (has_post_thumbnail()) : ?>
			<div class="page-featured-image">
				<?php st_philip_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<!-- End of Featured Image -->

		<!-- entry content -->
		<div class="entry-content">
			<section>
				<h2>Fr. Dmitri Info</h2>
				<address>
					<a href="mailto:jim@example.com">stphilippriest1978@gmail.com </a><br />
					<a href="tel:+14155550132">780-489-7943</a>
				</address>

				<a href="https://docs.google.com/forms/d/e/1FAIpQLSehKFZPYS0WBOsEMSX575h7i79CC-2OrRBLavNCGcGayMEj-g/viewform" class="default-button" target="_blank">Contact Us</a>
			</section>
		</div>
		<!-- end of .entry-content -->

		<!-- This is to show the admin the Edit button -->
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
		<!-- End of the Admin Edit button -->
	</section><!-- #post-<?php the_ID(); ?> -->

</main><!-- #main -->

<?php
/* Get the footer template part*/
get_footer();
