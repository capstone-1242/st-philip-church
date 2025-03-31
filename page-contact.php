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

	<section id="contact-page" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->


		<!-- entry content -->
		<div class="entry-content">

			<!-- featured image -->
			<div class="page-featured-image">
				<?php if (has_post_thumbnail()) :
					st_philip_post_thumbnail();
				else: ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/spiritual-resources-image-placeholder.webp'); ?>" alt="Church Ceiling">
				<?php endif; ?>
			</div>
			<!-- end of featured image -->

			<section>
				<h2>Fr. Dmitri Info</h2>
				<address>
					<!-- i structured it this way for styling while still following semantic HTML -->
					<!-- definition list -->
					<dl>
						<!-- definition term -->
						<dt>Email:</dt>
						<!-- definition data -->
						<dd><a href="mailto:stphilippriest1978@gmail.com">stphilippriest1978@gmail.com</a></dd>

						<dt>Phone:</dt>
						<dd><a href="tel:+17804897943">780-489-7943</a></dd>
					</dl>
				</address>



			</section>

			<div class="form-container">
				<h2>Send Us a Message</h2>
				<?php echo do_shortcode('[forminator_form id="303"]'); ?>
			</div>

			<!-- I created a forminator form for the contact page so the goole form is useless?  -->
			<!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSehKFZPYS0WBOsEMSX575h7i79CC-2OrRBLavNCGcGayMEj-g/viewform" class="default-button" target="_blank">Contact Us</a> -->
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
