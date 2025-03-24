<?php
 /**
  * The template for displaying all pages not specified by a specific customized template
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
 			the_post();
 
 			get_template_part( 'template-parts/content', 'page' );
 
 		endwhile; // End of the loop.
 		?>
 
 	</main><!-- #main -->
 
 <?php
 get_footer();
 ?>