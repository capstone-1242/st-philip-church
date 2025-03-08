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

			<p><?php the_field('description');?></p>
			<a href="#">View Events</a>
			<div>
				<?php the_field('image')?>
			</div>
			<p><?php echo the_field('description')?></p>

	<?php
		} // end while
	} // end if

	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
