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

	if (have_posts()) {
		while (have_posts()) {
			the_post();
	?>

			<p><?php echo wp_kses_post( get_field('introduction')) ?></p>

			<a href="#">View Events</a>
			<div class="acf-gallery">
			
				<?php echo wp_kses_post( get_field('image'))	?>
			
			</div>
			<p><?php echo wp_kses_post( get_field('description'))?></p>

	<?php
		} // end while
	} // end if

	?>

</main><!-- #main -->

<?php

get_footer();
