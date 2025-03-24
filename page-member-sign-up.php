<?php

/**
 * The template for displaying the Member Sign-up Page
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
			<h1 class="entry-title">Membership Sign Up</h1>
		</header><!-- .entry-header -->

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

			<a href="https://docs.google.com/forms/d/e/1FAIpQLSeF1_uPaD4fO-iOUnSI6cD3LkwhQ27oSOXUJxKqUwY0WbPVzA/viewform" class="default-button" aria-label="Go to the Member Sign Up form">Member Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a>

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