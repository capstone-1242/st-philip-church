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
		<?php if (have_posts()) : ?>

			<div>
				<header class="page-header">
					<?php
					echo '<h1 class="page-title">Parish Organizations</h1>';
					the_archive_description('<div class="archive-description">', '</div>');
					?>
				</header><!-- .page-header -->
				<p>When the liturgical services conclude, St. Philip's offers even more opportunities within our community to get to know one another and share our faith. Regardless of your age, the parish hosts various groups that encourage living a Christian life, fostering fellowship, and serving others. We look forward to getting to know you better outside of regular liturgical worship!</p>
			</div>

			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark" class="organization-card-link">
						<div class="organization-card">

							<div class="organization-image" style="background-image: url('<?php
																																						$featured_image_url = esc_url(get_the_post_thumbnail_url());
																																						$featured_image_placeholder_url = esc_url(get_template_directory_uri() . '/images/archive-image-placeholder.webp');
																																						echo $featured_image_url ? $featured_image_url : $featured_image_placeholder_url;
																																						?>');">

								<h2 class="organization-card-title">
									<?php the_title() ?>
								</h2>
							</div>
							<footer class="entry-footer">
								<?php st_philip_entry_footer(); ?>
							</footer>
						</div>
					</a>
				</article>

		<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</section>
</main><!-- #main -->

<?php
get_footer();
