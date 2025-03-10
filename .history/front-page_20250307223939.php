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
$welcome_message = get_field('welcome_message');
?>

	<!-- Hero Banner section -->
	<div class="hero-banner">
		<p>IN PROGRESS</p>
	</div>

	<!-- Weekly Highlights section -->
	<section>
		<h2>Weekly Highlights</h2>
		<div>
			<p>IN PROGRESS</p>
		</div>
	</section>

	<!-- Welcome to our Church -->
	<section>
		<h2>Welcome to our Church</h2>
		<p><?php echo $welcome_message?></p>
		<h3>Come In-Person</h3>
		<p>PLACEHOLDER: ADDRESS</p>
		<div>
			<div>PLACEHOLDER: Service time morning</div>
			<div>PLACEHOLDER: Service time morning 2</div>
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
		<p>PLACEHOLDER: donation</p>
		<a href="#">Make a Donation</a>
		<p>PLACEHOLDER: IMAGE</p>
	 </section>

	 <!-- Become a Member -->
		<section>
			<h2>Become a Member</h2>
			<p>PLACEHOLDER: member spiel</p>
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