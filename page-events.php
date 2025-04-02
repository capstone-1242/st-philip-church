<?php

/**
 * The template for displaying the Event Calendar Page
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
	<?php
	while (have_posts()) :
		the_post(); ?>

		<section id="events-page" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title">Parish Events</h1>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<p>Throughout the year, there are a variety of events planned to help build fellowship and strengthen our parish community. These events are a great opportunity to connect with one another and share in the joy of our faith. </p>
				<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=America%2FEdmonton&showPrint=0&src=Y29tbXVuaWNhdGlvbi5zdC5waGlsaXAuY2h1cmNoQGdtYWlsLmNvbQ&src=YjQxYjk3MTcxOWE2OTk5ZjAxMWVlNjdhN2ViMTYxODAyNWQ0ZjVmOWFmYzkwYjk5ZDU2N2E5MTU1YTI2ZDYyZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZGM5NWZlNTAwY2E3NTdkNGIwNWNiNjE4MzU5ZDBlMTA5YTNjZDg5Y2I0YjAxZjk4NTUyNWVmNTVhYjBlNGQwOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%23EF6C00&color=%23F09300" class="responsive-iframe" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php st_philip_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</section><!-- #post-<?php the_ID(); ?> -->
<?php endwhile;?>
</main><!-- #main -->


<?php 
/* Get the footer template part*/
get_footer(); 
?>
