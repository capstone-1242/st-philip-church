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
					<?php 		the_title('<h1 class="entry-title">', '</h1>');?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<!-- PARISH ORGANIZATION ACF FIELD GROUPS -->

					<!-- Brief Introduction -->
					<p><?php echo wp_kses_post(get_field('introduction')); ?></p>

					<a href="/events/" aria-label="View upcoming events" class="default-button">View Events</a>

					<!-- Gallery Using WYSWYG editor -->
					<div class="acf-gallery">
							<!-- This code is generated through the help of Chat and GoogleSearch : I need to customized it to better fit it's intended functionality -->
							<?php
							// this is to get the gallery field from acf;
							$gallery_content = get_field('gallery');

							// this is to check if there is any content, otherwise it says "no images uploaded"
							if ($gallery_content) {
								// Remove any <a> tags that may already be wrapping images (e.g., from the WYSIWYG editor) - WYSIWYG is weird in a sense that it wraps every image i have in a and also generate another a after that, this expression is basicallly saying remove the firstcaptured group ([^"]+)"[^>]*> with the second captured group: (<img[^>]+>)
								$gallery_content = preg_replace('/<a[^>]*href="([^"]+)"[^>]*>(<img[^>]+>)<\/a>/i', '$2', $gallery_content);

								// This is to find all the img tags and wrap them in a
								$gallery = preg_replace_callback(
									'/<img[^>]+src="([^"]+)"[^>]*>/i',
									function ($matches) {
										$img_tag = $matches[0];
										$src = $matches[1];
										// Wrap the image tag with <a> for Lightbox
										return '<a href="' . esc_url($src) . '" data-lightbox="committee-gallery">' . $img_tag . '</a>';
									},
									$gallery_content
								);

								// Ensure there are no <p> tags around the <a> tag since WYSIWG wraps every a with p before
								$gallery = preg_replace('/<p>\s*(<a[^>]+>.*?)<\/p>/i', '$1', $gallery);

								// Output the final gallery content with lightbox wrapping images
								echo wp_kses_post($gallery);
							} else {
								echo '<p>No images uploaded yet.</p>';
							}
							?>
							<!-- End of Code -->
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

				
						<!-- START OF RECOMMENDATIONS -->
					
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
														<h3 class="organization-card-title">
															<?php the_title(); ?>
														</h3>
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