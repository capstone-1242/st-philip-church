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
					if (is_singular()) :
						the_title('<h1 class="entry-title">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

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

					<h2>Gallery</h2>
					<div class="acf-gallery">
						<?php
						$gallery = get_field('gallery');
						$gallery = preg_replace('/<p><img(.*?)<\/p>/', '<img$1', $gallery);
						echo wp_kses_post($gallery);	
						?>
					</div>
				<div class="responsibility-container">
						<h2>Responsibilities:</h2>
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
				</div>

						<div class="committee-button-container">
							<?php if ($committee_members): ?>
								<h2>Committee Members</h2>
								<div class="committee-list">
									<?php foreach ($committee_members as $member):
		
										// Get member image (from custom field)
										$member_image = get_field('profile_photo', $member->ID);
										$member_name = get_the_title($member->ID);
		
									?>
										<div class="committee-member">
											<!-- Member Image -->
											<?php if ($member_image): 
												  $member_image_url = $member_image['url'];
													$default_image_url = get_template_directory_uri() . '/images/avatar-placeholder.webp';
											?>
												<img src="<?php 
													echo esc_url($member_image_url) ?>" alt="Profile photo of <?php echo esc_attr($member_name); ?>" width="150" height="150">
											<?php else:?>
												<img src="<?php echo esc_url($default_image_url)?>" alt="Placeholder image for <?php echo esc_attr($member_name); ?>" width="150" height="150">
											<?php endif; ?>
		
											<!-- Member Name -->
											<h3><?php echo esc_html($member_name); ?></h3>
		
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
								<a href="<?php echo esc_url(get_permalink(86)) ?>" class="default-button become-member-button">Become a Member <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
							<p class="button-description">You will be redirected to a Google Form</p>
							</div>
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
