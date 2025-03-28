<?php

/**
 * The template for displaying the Parish Committee Archive
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
	<section class="committee-archive">
		<?php if (have_posts()) : ?>
			<div>
				<header class="page-header">
					<?php
					echo '<h1 class="page-title">Parish Committees</h1>';
					the_archive_description('<div class="archive-description">', '</div>');
					?>
				</header><!-- .page-header -->

				<p>St. Philip's has various committees that play a vital role in the life of our church, each contributing to our community. These groups work together to support our shared mission, helping to guide and strengthen our parish. We welcome you to learn more about each committee and get involved!</p>
			</div>

		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/archive-content', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/archive-content', 'none');

		endif;
		?>
	</section>
</main><!-- #main -->

<?php
get_footer();
