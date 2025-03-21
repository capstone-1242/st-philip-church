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
  */
 
 get_header();
 ?>
 
 	<main id="primary" class="site-main">
 		<?php
 		while ( have_posts() ) :
 			the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

							if ( 'post' === get_post_type() ) :
								?>
								<div class="entry-meta">
									<?php
									st_philip_posted_on();
									st_philip_posted_by();
									?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</header><!-- .entry-header -->
<div class="entry-content">

	<h2>Parish Events</h2>
	<p>Throughout the year, there are a variety of events planned to help build fellowship and strengthen our parish community. These events are a great opportunity to connect with one another and share in the joy of our faith. </p>
	<?php

	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'st_philip' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'st_philip' ),
			'after'  => '</div>',
		)
	);
	?>
</div><!-- .entry-content -->

<footer class="entry-footer">
	<?php st_philip_entry_footer(); ?>
</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

 	</main><!-- #main -->
 
 <?php endwhile; get_footer(); ?>