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
 **/

get_header();
?>

	<main id="primary" class="site-main">
	<section>
		<h2>Livestream</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		
	</section>
	<section>
			<h2>Our Service Times</h2>
			<p>PLACEHOLDER</p>
		</section>
		<section>
			<h2>Past Streams</h2>
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
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
