<?php

/**
 * The template for displaying the Donation Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://www.advancedcustomfields.com/resources/ 
 * @link https://www.w3.org/WAI/ARIA/apg/patterns/landmarks/examples/HTML5.html
 * @link https://www.aditus.io/aria/aria-label/
 *
 * @package st_philip
 * 
 **/

get_header();
?>

<main id="primary" class="site-main">

	<section id="donation-page" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title">Make a Donation</h1>
		</header><!-- .entry-header -->

		<!-- entry content -->
		<div class="entry-content">

			<!-- featured image -->
			<!-- The default is the spirtual resources image but they can change it through featured image -->
			<div class="page-featured-image">
				<?php if (has_post_thumbnail()) :
					st_philip_post_thumbnail();
				else: ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/spiritual-resources-image-placeholder.webp'); ?>" alt="Church Ceiling">
				<?php endif; ?>
			</div>
			<!-- end of featured image -->

			<p> St. Philip Antiochian Orthodox Church has been a place of faith and community for over 46 years. Your generous donations support our mission, organizations, and community. Thank you for helping us grow for future generations.</p>

			<div class="donation-info">
				<div class="main-info">
					<p>Donations may be given via eTransfer using your online bank account directly to:</p>
					<p class="email">saintphilipedmonton@gmail.com</p>
				</div>
	
				<p>Note: If you are giving extra for candles, bookstore items, church document registration, or hall rentals, please make a note to the Treasurer.</p>
				<p>Tax receipts cannot be given for items being purchased.</p>
			</div>
		</div>
		<!-- .entry-content -->

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
?>
