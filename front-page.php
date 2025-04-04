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
	$livestream_video_url = wp_kses_post(get_field('video_url'));
	?>

	<!-- Hero Banner section -->
	<section class="hero-banner">

		<h2 class="hero-title">St. Philip Antiochian<span>Church</span></h2>
		<p>Orthodoxy with Middle Eastern Flavour!</p>
		<p>Our store shop just opened, check it out!</p>
		<p><a href="/shop/" class="default-button" aria-label="Visit St.Philip's online shop">View Shop</a></p>

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
				<div class="fb-video responsive-iframe" data-href="			<?php echo $livestream_video_url?>" data-width="auto" data-show-text="false" data-allowfullscreen="true" data-lazy="true" data-show-captions="true" ><blockquote cite="			<?php echo $livestream_video_url?>/" class="fb-xfbml-parse-ignore"><a href="			<?php echo $livestream_video_url?>/"></a><p></p>Posted by <a href="https://www.facebook.com/stphilipedmonton">St. Philip Antiochian Orthodox Church</a> on Sunday, March 30, 2025</blockquote></div>
				<a href="/livestream/" class="default-button full-width-button" aria-label="View our livestreams">View Our Livestreams</a>
			</section>

			<div class="welcome-overlay"></div>
		</section>


	<!--Upcoming Events-->
	<section class="upcoming-events">
		<div>
			<h2>Upcoming Events</h2>
			<iframe title="St. Philip's Events" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=America%2FEdmonton&showPrint=0&src=Y29tbXVuaWNhdGlvbi5zdC5waGlsaXAuY2h1cmNoQGdtYWlsLmNvbQ&src=YjQxYjk3MTcxOWE2OTk5ZjAxMWVlNjdhN2ViMTYxODAyNWQ0ZjVmOWFmYzkwYjk5ZDU2N2E5MTU1YTI2ZDYyZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZGM5NWZlNTAwY2E3NTdkNGIwNWNiNjE4MzU5ZDBlMTA5YTNjZDg5Y2I0YjAxZjk4NTUyNWVmNTVhYjBlNGQwOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%23EF6C00&color=%23F09300&mode=AGENDA" class="responsive-iframe" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	</section>




	<!-- Parish Organizations -->
	<section>
		<div>
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
	
						
				?>
						<a href="<?php esc_url(the_permalink()); ?>" class="organization-card-link">
							<div class="organization-card">
							<?php
										$image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
										if (!$image_url) {
											$image_url = get_template_directory_uri() . '/images/home-hero-banner.webp';
										}
										?>
								<div class="organization-image" style="background-image: url('<?php echo esc_url($image_url); ?>');">
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
			<a href="/parish-organization/" class="default-button full-width-button" aria-label="View full list of Parish Organizations">Browse the full list</a>
		</div>
	</section>

	<!-- Become a Member -->
	
		<section class="membership">
			<div>
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
					<a href="/member-sign-up/" class="default-button full-width-button" aria-label="View Full Details about Membership">Read the Full Details</a>
				</div>
				<div class="membership-overlay">
				</div>
			</div>
		</section>

	

	<!-- Donation -->
	<section class="donation">
	<div>
			<hr>
			<div>
				<h2>Support the Church</h2>
				<p>Your contributions help the church continue its mission and serve the community. Every donation plays a vital role in extending our outreach and impact.</p>
				<a href="/donate/" class="default-button full-width-button">Make a Donation</a>
			</div>
			<?php
			$donation_page_id = 83;
			$donation_image = get_the_post_thumbnail_url($donation_page_id, 'full');
			if ($donation_image) : ?>
				<img src="<?php echo esc_url($donation_image); ?>" alt="Donation Image">
			<?php endif; ?>
	</div>
	</section>


</main><!-- #main -->

<?php

get_footer();

?>