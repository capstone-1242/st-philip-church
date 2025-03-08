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
		<p>PLACEHOLDER: WELCOME SPIEL</p>
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
			'post_type' => 'parish_organizations',
			'posts_per_page' => 3,
			'order' => 'ASC',
		);

		$organization_query = new WP_Query($args);
		if ($events_query->have_posts()) :
			while ($events_query->have_posts()) : $events_query->the_post();
				echo '<div class="event">';
				the_title();
				the_excerpt();
				echo '</div>';
			endwhile;
		else :
			echo '<p>No upcoming events.</p>';
		endif;
		wp_reset_postdata();
		?>
	</section>

	<!--  -->

</main><!-- #main -->

<?php

get_footer();
