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
$featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
?>

	<!-- Hero Banner section -->
	<div class="hero-banner" style="background-image: url('<?php echo esc_url( $featured_image_url ); ?>');">
		<img src="images/no-image-placeholder.webp" alt="background image">
		<h2>St. Philip Antiochian Church</h2>
		<p>Orthodoxy with Middle Eastern Flavour!</p>
		<p>Our store shop just opened, check it out!</p>
		<a href="#" class="fake-button">View Shop</a>
	</div>

	<!-- Weekly Highlights section -->
	<section>
		<h2>Weekly Highlights</h2>
			<div>
				<h3><?php echo $announcement_title?></h3>
				<p><?php echo $announcement_content?></p>
			</div>
	</section>

	<!-- Welcome to our Church -->
	<section>
		<h2>Welcome to our Church</h2>
		<p>The Orthodox Church, with its rich history and spiritual practices, invites believers and seekers alike to explore its ancient traditions and vibrant faith. If you’re feeling lost and looking for guidance through a spiritual journey, Fr. Micheal and many of the clergy would be excited to welcome you and support you on your spiritual journey.</p>
		<h3>Come In-Person</h3>
		<div>
			<i class="fa-solid fa-location-dot"></i>
			<p>15804 98 Ave NW, Edmonton AB T5P 4R9, Canada</p>
		</div>
		<div>
			<div><span>9:20 AM</span>Orthros (Matins)</div>
			<div><span>10:20 AM</span>Divine Liturgy</div>
		</div>
		<h3>Join Online</h3>
		<p>LIVESTREAM PLACEHOLDER</p>
		<a href="#" class="fake-button">View Our Livestreams</a>
	</section>

	<!-- Parish Organizations -->
	<section>
		<h3>Explore Our Church Groups</h3>
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
					<a href="<?php echo esc_url($featured_image_url); ?>"><?php the_title()?></a>
				</div>
		<?php	endwhile; else :?>
			<p>No parish organizations found</p>
		<?php endif;
		wp_reset_postdata();
		?>

		<a href="https://st-philip-church.web.dmitcapstone.ca/st-philip-church/parish_organizations/" class="fake-button">View the full list</a>
	</section>


	<!--Upcoming Events-->
	<section>
		<h2>Upcoming Events</h2>
		<div class="events-list">
			<p>IN PROGRESS</p>
		</div>
		<a href="#" class="fake-button">View All Events</a>
	</section>

	<!-- Donation -->
	 <section>
		<h2>Support the Church</h2>
		<p><?php echo $support_the_church_description?></p>
		<a href="#" class="fake-button">Make a Donation</a>
		<p>PLACEHOLDER: IMAGE</p>
	 </section>

	 <!-- Become a Member -->
		<section>
			<h2>Become a Member</h2>
			<p>Ready to take the next steps in your spiritual journey? Sign up to become a member and discover the fulfilling and fruitful life of an Antiochian Christian.</p>
			<p>There are 3 memberships to choose from, whether you’re new, ready to commit, or bringing your whole family.</p>
			<ul>
				<li><a href="#">Non-Voting member</a></li>
				<li><a href="#">Voting member</a></li>
				<li><a href="#">Voting member-family</a></li>
			</ul>
			<small>*Paid memberships give users voting precedence over non-paid members.</small>
			<a href="#" class="fake-button">View Full Details</a>
		</section>


</main><!-- #main -->

<?php

get_footer();

		?>