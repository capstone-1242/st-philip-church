<?php
/**
 * The template for displaying the Parish Organization Archive
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
<section class="organization-archive">
		<?php if ( have_posts() ) : ?>

			<div>
				<header class="page-header">
					<?php 
					echo '<h1 class="page-title">Parish Organizations</h1>';
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				<p>When the liturgical services conclude, St. Philip's offers even more opportunities within our community to get to know one another and share our faith. Regardless of your age, the parish hosts various groups that encourage living a Christian life, fostering fellowship, and serving others. We look forward to getting to know you better outside of regular liturgical worship!</p>
			</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/archive-content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</section>
	</main><!-- #main -->

<?php
get_footer();
