<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package st_philip
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'st_philip' ); ?></h1>
				</header><!-- .page-header -->
	
				<div class="page-content">
					<a href="/" class="default-button">Return to Home</a>
				</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
