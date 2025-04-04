<?php

/**
 * The template for displaying the Single Page of Parish Organization
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

	if (have_posts()) :
		$current_organization_id = get_the_ID();
		while (have_posts()) :
			the_post();
	?>

			<!-- START OF CONTENT -->
			<section id="organization-single" <?php post_class(); ?>>
				<header class="org-single-header">
					<?php
					if (is_singular()) :
						the_title('<h1 class="entry-title">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;
					?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<!-- PARISH ORGANIZATION ACF FIELD GROUPS -->

					<!-- Brief Introduction -->
					<p><?php echo wp_kses_post(get_field('introduction')); ?></p>

					<a href="/events/" aria-label="View upcoming events" class="default-button">View Events</a>

					<!-- Gallery Using WYSWYG editor -->
					<div class="acf-gallery">
						<?php
						$gallery = get_field('gallery');
						$gallery = preg_replace('/<p><img(.*?)<\/p>/', '<img$1', $gallery);
						echo wp_kses_post($gallery);
						?>
					</div>

					<!-- Description -->
					<div class="org-description">
						<?php echo wp_kses_post(get_field('description')); ?>
					</div>

					<!-- SIGN UP FOR UPDATES FORM -->
					<div class="form-recommendation-container">
						<section>
							<h2>Sign up for the Newsletter</h2>
							<?php echo do_shortcode('[forminator_form id="285"]'); ?>
						</section>

				
						<!-- START OF CAR RECOMMENDATIONS -->
					
							<?php
							$args = array(
								'post_type' => 'parish-organization',
								'posts_per_page' => 3,
								'post__not_in' => array($current_organization_id),
								'orderby' => 'date',
								'order' => 'ASC',
							);
	
							$query = new WP_Query($args);
	
							if ($query->have_posts()) :
							?>
								<section class="organization-recommendations">
									<h2>Explore other groups</h2>
									<div class="organization-cards">
										<?php while ($query->have_posts()) : $query->the_post(); ?>
											<a href="<?php the_permalink(); ?>" class="organization-card-link" aria-label="View details of <?php the_title(); ?>">
												<div class="organization-card">
													<?php
													$image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
													if (!$image_url) {
														$image_url = get_template_directory_uri() . '/images/home-hero-banner.webp';
													}
													?>
													<div class="organization-image" style="background-image: url('<?php echo esc_url($image_url) ?>');" role="img" aria-label="Image of <?php the_title(); ?>">
														<div class="organization-card-title">
															<h3><?php the_title(); ?></h3>
														</div>
													</div>
												</div>
											</a>
										<?php endwhile; ?>
									</div>
								</section>
							<?php
							endif;
							wp_reset_postdata();
							?>
				
						<!-- END OF RECOMMENDATIONS -->

					</div><!-- .entry-content -->
				</div>
				<!-- This is to display meta tags for screen readers, DO NOT DELETE -->
				<footer class="entry-footer">
					<?php st_philip_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</section><!-- #post-<?php the_ID(); ?> -->
			<!-- END OF CONTENT -->
	<?php
		endwhile; // end while
	endif; // end if

	?>

</main><!-- #main -->

<?php
/* Get the footer template part*/
get_footer();
?>