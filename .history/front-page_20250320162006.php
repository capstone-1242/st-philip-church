<?php

/**
 * The front-page file
 *
 * This is a template specifically used for the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	// $welcome_message =  wp_kses_post(get_field('welcome_message'));
	// $church_location =  wp_kses_post(get_field('church_location'));
	// $explore_our_church_group_description =  wp_kses_post(get_field('explore_our_church_group_description'));
	// $support_the_church_description =  wp_kses_post(get_field('support_the_church_description'));
	// $become_a_member_description =  wp_kses_post(get_field('become_a_member_description'));
	$announcement_title =  wp_kses_post(get_field('title'));
	$announcement_content = wp_kses_post(get_field('content'));
	$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	$theme_banner_image_url =  get_template_directory_uri() . '/images/home-hero-banner.webp';
	$archive_organization_url =  get_post_type_archive_link('parish-organization');
	?>

	<!-- Hero Banner section -->
	<div class="hero-banner" style="background-image: url('<?php
																													// Check if the post has a featured image, otherwise fallback to the theme default image
																													echo esc_url($featured_image_url ? $featured_image_url : $theme_banner_image_url);
																													?>');">
		<h2>St. Philip Antiochian Church</h2>
		<p>Orthodoxy with Middle Eastern Flavour!</p>
		<p>Our store shop just opened, check it out!</p>
		<a href="#" class="fake-button">View Shop</a>
	</div>

	<!-- Weekly Highlights section -->
	<section>
		<h2>Weekly Highlights</h2>
		<div>
			<h3><?php echo $announcement_title ?></h3>
			<p><?php echo $announcement_content ?></p>
		</div>
	</section>

	<!-- Welcome to our Church -->
	<section>
		<h2>Welcome to our Church</h2>
		<p>The Orthodox Church, with its rich history and spiritual practices, invites believers and seekers alike to explore its ancient traditions and vibrant faith. If you’re feeling lost and looking for guidance through a spiritual journey, Fr. Micheal and many of the clergy would be excited to welcome you and support you on your spiritual journey.</p>
		<section>
			<h3>Come In-Person</h3>
			<div>
				<i class="fa-solid fa-location-dot"></i>
				<p>15804 98 Ave NW, Edmonton AB T5P 4R9, Canada</p>
			</div>
			<div>
				<div><span>9:20 AM</span>Orthros (Matins)</div>
				<div><span>10:20 AM</span>Divine Liturgy</div>
			</div>
		</section>
		<section>
			<h3>Join Online</h3>
			<p>LIVESTREAM PLACEHOLDER</p>
			<a href="<?php echo esc_url(get_permalink(72)); ?>" class="fake-button">View Our Livestreams</a>
		</section>
	</section>


	<!--Upcoming Events-->
	<section>
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
						<span><?php 
						$event_start_date= get_post_meta(get_the_ID(), '_event_start_date', true); 
						
						if($event_start_date){
							$date = new DateTime($event_start_date);
							echo $date->format('F j'); 
						}
						?>
						</span>
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
		<?php  $total_events = wp_count_posts('event_listing')->publish;?>
		<a href="<?php echo esc_url(get_permalink(253)); ?>" class="fake-button">View All Events(<?php echo $total_events?>)</a>
	</section>


	<!-- Parish Organizations -->
	<section>
		<h2>Explore Our Church Groups</h2>
		<p>Our organizations focus on growing community, connections, and skills making them the foundation of our church.</p>
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
				<div class="organization" style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
					<a href="<?php echo esc_url($featured_image_url); ?>"><?php the_title() ?></a>
				</div>
			<?php endwhile;
		else : ?>
			<p>No parish organizations found</p>
		<?php endif;
		wp_reset_postdata();
		?>

		<a href="<?php echo $archive_organization_url ?>" class="fake-button">View the full list</a>
	</section>

	<!-- Donation -->
	<section>
		<h2>Support the Church</h2>
		<p>Your contributions help the church continue its mission and serve the community. Every donation plays a vital role in extending our outreach and impact.</p>
		<a href="<?php echo esc_url(get_permalink(83)); ?>" class="fake-button">Make a Donation</a>
		<?php
		$donation_page_id = 83;
		$donation_image = get_the_post_thumbnail_url($donation_page_id, 'full');
		if ($donation_image) : ?>
			<img src="<?php echo esc_url($donation_image); ?>" alt="Donation Image">
		<?php endif; ?>
	</section>

	<!-- Become a Member -->
	<section>
		<h2>Become a Member</h2>
		<p>Ready to take the next steps in your spiritual journey? Sign up to become a member and discover the fulfilling and fruitful life of an Antiochian Christian.</p>
		<p>There are 3 memberships to choose from, whether you’re new, ready to commit, or bringing your whole family.</p>
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
		<small>*Paid memberships give users voting precedence over non-paid members.</small>
		<a href="<?php echo esc_url(get_permalink(86)) ?>" class="fake-button">View Full Details</a>
	</section>

</main><!-- #main -->

<?php

get_footer();

?>