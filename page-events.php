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

		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;?>
			</header><!-- .entry-header -->
			<div class="entry-content">

				<h2>Parish Events</h2>
				<p>Throughout the year, there are a variety of events planned to help build fellowship and strengthen our parish community. These events are a great opportunity to connect with one another and share in the joy of our faith. </p>
				<?php

				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'st_philip'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
						'after'  => '</div>',
					)
				);
				?>
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
