<?php

/**
 * The template for displaying the About Page
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

<main id="primary" class="site-main front-page">

	<?php
	$announcement_title =  wp_kses_post(get_field('title'));
	$announcement_content = wp_kses_post(get_field('content'));
	$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	$theme_banner_image_url =  get_template_directory_uri() . '/images/home-hero-banner.webp';
	$archive_organization_url =  get_post_type_archive_link('parish-organization');
	?>

	<!-- Hero Banner section -->
	<section class="hero-banner">

		<h2 class="hero-title">St. Philip Antiochian Church</h2>
		<p>Orthodoxy with Middle Eastern Flavour!</p>
		<p>Our store shop just opened, check it out!</p>
		<a href="<?php echo esc_url(get_permalink(77)); ?>" class="default-button" aria-label="Visit St.Philip's online shop">View Shop</a>

	</section>


	<!-- Weekly Highlights section -->

	<section class="weekly-highlights">

		<h2>Weekly Highlights</h2>
		<div>
			<?php if ($announcement_title && $announcement_content) : ?>
				<h3><?php echo $announcement_title ?></h3>
				<p><?php echo $announcement_content ?></p>
			<?php else: ?>
				<p>No announcements at this time.</p>
			<?php endif; ?>

		</div>
	</section>

	<!-- Welcome to our Church -->
	

		<section class="welcome">

			<div>
				<h2>Welcome to our Church</h2>
				<p>The Orthodox Church, with its rich history and spiritual practices, invites believers and seekers alike to explore its ancient traditions and vibrant faith. If you’re feeling lost and looking for guidance through a spiritual journey, Fr. Micheal and many of the clergy would be excited to welcome you and support you on your spiritual journey.</p>
				<section>
					<h3>Come In-Person</h3>
					<div>
						<i class="fa-solid fa-location-dot"></i>
						<p>15804 98 Ave NW, Edmonton AB T5P 4R9, Canada</p>
					</div>
					<div>
						<ul class="service-times">
							<li><time datetime="09:20">9:20 AM</time> Orthros (Matins)</li>
							<li><time datetime="10:20">10:20 AM</time> Divine Liturgy</li>
						</ul>
					</div>
				</section>
				</div>
			<section>
				<h3>Join The Livestream</h3>
				<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<a href="<?php echo esc_url(get_permalink(72)); ?>" class="default-button full-width-button" aria-label="View our livestreams">View Our Livestreams</a>
			</section>
		</section>


	<!--Upcoming Events-->
	<section class="upcoming-events">
		<h2>Upcoming Events</h2>
		<div class="events-list">
			<!--test-->
			<?php
			$args = array(
				'post_type'      => 'event_listing',
				'posts_per_page' => 2,
				'orderby'        => 'meta_value',
				'meta_key'       => '_event_start_date',
				'order'          => 'ASC',
			);

			$events = new WP_Query($args);


			if ($events->have_posts()) :
				while ($events->have_posts()) : $events->the_post(); ?>
					<div class="event-item">
						<div>
							<?php
							$event_banner = get_post_meta(get_the_ID(), '_event_banner', true);
							if ($event_banner) :
							?>
								<img src="<?php echo esc_url($event_banner); ?>" alt="Event Banner">
							<?php else : ?>
								<p>No event banner available</p>
							<?php endif; ?>
						</div>
						<div class="date">
							<?php
							$event_start_date = get_post_meta(get_the_ID(), '_event_start_date', true);

							if ($event_start_date) :
								$date = new DateTime($event_start_date);
								$month = $date->format('F');
								$day = $date->format('j'); ?>
								<span class="event-month"><?php echo $month; ?></span>
								<hr>
								<span class="event-day"><?php echo $day; ?></span>

							<?php endif;
							?>
						</div>



						<h3><a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), '_event_title', true); ?></a></h3>
						<p><?php echo get_post_meta(get_the_ID(), '_event_start_time', true); ?></p>
						<p><?php echo get_post_meta(get_the_ID(), '_event_description', true); ?></p>
					</div>
			<?php endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No upcoming events found.</p>';
			endif;
			?>
			<!-- end of test -->
		</div>
		<?php $total_events = wp_count_posts('event_listing')->publish; ?>
		<a href="<?php echo esc_url(get_permalink(253)); ?>" class="default-button full-width-button">View All Events (<?php echo $total_events ?>)</a>
	</section>




	<!-- Parish Organizations -->
	<section>
		<hr>
		<h2>Explore Our Church Groups</h2>
		<p>Our organizations focus on growing community, connections, and skills making them the foundation of our church.</p>
		<div class="parish-organization-list">
			<?php
			$args = array(
				'post_type' => 'parish-organization',
				'posts_per_page' => 3,
				'order' => 'ASC',
			);

			$organization_query = new WP_Query($args);


			if ($organization_query->have_posts()) :


				while ($organization_query->have_posts()) : $organization_query->the_post();

					$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					$organization_url = get_permalink();
			?>
					<a href="<?php echo esc_url($featured_image_url); ?>" class="organization-card-link">
						<div class="organization-card">
							<div class="organization-image" style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
								<p class="organization-card-title"><?php the_title() ?></p>
							</div>
						</div>
					</a>
				<?php endwhile;
			else : ?>
				<p>No parish organizations found</p>
			<?php endif;
			wp_reset_postdata();
			?>
		</div>
		<a href="<?php echo $archive_organization_url ?>" class="default-button full-width-button" aria-label="View full list of Parish Organizations">View the full list</a>
	</section>

	<!-- Become a Member -->
	
		<section class="membership">
			<div>
				<h2>Become a Member</h2>
				<p>Ready to take the next steps in your spiritual journey? Sign up to become a member and discover the fulfilling and fruitful life of an Antiochian Christian.</p>
				<p>There are 3 memberships to choose from, whether you’re new, ready to commit, or bringing your whole family.</p>
			</div>
			<div class="membership-options">
				<section>
					<h3>Non-Voting Member</h3>
					<p>Signs you up for the newsletter and adds you to the church member list.</p>
				</section>
				<section>
					<h3>Voting Member - Single ($250/yr)*</h3>
					<p>Have your opinion heard as an active voting member.</p>
				</section>
				<section>
					<h3>Voting Member - Family
						($400/yr)</h3>
					<p>Same as the single but also registers your spouse and family members.</p>
				</section>
			</div>
			<div class="button-container">
			<p class="fine-print">*Paid memberships give users voting precedence over non-paid members.</p>
				<a href="<?php echo esc_url(get_permalink(86)) ?>" class="default-button full-width-button" aria-label="View Full Details about Membership">View Full Details</a>
			</div>
			<div class="membership-overlay">
			</div>
		</section>

	

	<!-- Donation -->
	<section class="donation">
		<hr>
		<div>
			<h2>Support the Church</h2>
			<p>Your contributions help the church continue its mission and serve the community. Every donation plays a vital role in extending our outreach and impact.</p>
			<a href="<?php echo esc_url(get_permalink(83)); ?>" class="default-button full-width-button">Make a Donation</a>
		</div>
		<?php
		$donation_page_id = 83;
		$donation_image = get_the_post_thumbnail_url($donation_page_id, 'full');
		if ($donation_image) : ?>
			<img src="<?php echo esc_url($donation_image); ?>" alt="Donation Image">
		<?php endif; ?>
	</section>


</main><!-- #main -->

<?php

get_footer();

?>