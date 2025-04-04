<?php

/**
 * The template for displaying the Single Page of Parish Committee
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
	if (have_posts()):
		// this is for the recommendations
		$current_committee_id = get_the_ID();
		// Parish Message ACF field group
		$committee_members = get_field('committee_members');
		$committee_chair = get_field('committee_chair');
		// Need ACF plugin for it to not throw error in your local copy

		while (have_posts()) :
			the_post(); ?>

			<!-- START OF THE CONTENT-->

			<section id="committee-single" <?php post_class(); ?>>
				<header class="com-single-header">
					<?php
					the_title('<h1 class="entry-title">', '</h1>');

					if ('post' === get_post_type()) :
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
					<p><?php echo wp_kses_post(get_field('purpose')); ?></p>

					<section>
						<h3>Gallery</h3>
						<div class="acf-gallery">
							<?php
							$gallery = get_field('gallery');
							$gallery = preg_replace('/<p><img(.*?)<\/p>/', '<img$1', $gallery);
							echo wp_kses_post($gallery);
							?>
						</div>
					</section>
					<section class="responsibility-container">
						<h3>Responsibilities:</h3>
						<?php
						$string = get_field('responsibilities');
						$responsibilities = explode("\n", $string); ?>
						<ul>
							<?php
							foreach ($responsibilities as $responsibility): ?>
								<li>
									<?php echo esc_html($responsibility) ?>
								</li>
							<?php endforeach ?>
						</ul>
					</section>

					<div>
						<section class="committee-button-container">
							<?php if ($committee_members): ?>
								<h3>Committee Members</h3>
								<div class="committee-list">
									<?php foreach ($committee_members as $member):

										// Get member image (from custom field)
										$member_image = get_field('profile_photo', $member->ID);
										$member_name = get_the_title($member->ID);

									?>
										<div class="committee-member">
											<!-- Member Image -->
											<?php
											$default_image_url = get_template_directory_uri() . '/images/avatar-placeholder.webp'; // Define default image URL outside of the if block

											if ($member_image):
												$member_image_url = $member_image['url'];
											?>
												<img src="<?php echo esc_url($member_image_url); ?>" alt="Profile photo of <?php echo esc_attr($member_name); ?>" width="150" height="150">
											<?php else: ?>
												<img src="<?php echo esc_url($default_image_url); ?>" alt="Placeholder image for <?php echo esc_attr($member_name); ?>" width="150" height="150">
											<?php endif; ?>


											<!-- Member Name -->
											<h4>
												<a href="<?php echo esc_url(get_edit_post_link($member->ID)); ?>">
													<?php echo esc_html($member_name); ?>
												</a>
											</h4>

											<!-- Chair Label -->
											<?php if ($committee_chair && $committee_chair[0]->ID == $member->ID): ?>
												<p>Chair</p>
											<?php endif; ?>
										</div>

									<?php endforeach; ?>
								</div>
							<?php else: ?>
								<p>No members assigned.</p>
							<?php endif; ?>
							<div>
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSehKFZPYS0WBOsEMSX575h7i79CC-2OrRBLavNCGcGayMEj-g/viewform" class="default-button become-member-button"
									aria-label="Become a member by filling out the form">Become a Member <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<p class="button-description">You will be redirected to a Google Form</p>
							</div>
						</section>

						<!-- START OF CAR RECOMMENDATIONS -->

						<?php
						$args = array(
							'post_type' => 'parish-committee',
							'posts_per_page' => 2,
							'post__not_in' => array($current_committee_id),
							'orderby' => 'date',
							'order' => 'ASC',
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) :
						?>
							<section class="committee-recommendations">
								<h2>Explore other committees</h2>
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
					</div>
				</div><!-- .entry-content -->


				<!-- This is to display meta tags for screen readers, DO NOT DELETE -->
				<footer class="entry-footer">
					<?php st_philip_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</section><!-- #post-<?php the_ID(); ?> -->
			<!-- END OF THE CONTENT -->
	<?php
		endwhile; // End of the loop.
	endif;
	?>

</main><!-- #main -->

<?php
/* Get the footer template part*/
get_footer();
?>