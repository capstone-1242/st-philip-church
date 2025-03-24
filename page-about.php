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

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post(); ?>
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->

			<!-- Featured Image -->
			<!-- Client has to choose featured image for every page or set a default picture-->
			<?php if (has_post_thumbnail()) : ?>
				<div class="page-featured-image">
					<?php st_philip_post_thumbnail(); ?>
				</div>
			<?php endif; ?>
			<!-- End of Featured Image -->

			<!-- entry content -->
			<div class="entry-content">
				<!-- the more tag will be used to add functionality later for the read more button -->
				<section>
					<h2>History</h2>
					<p>In September 1978, after just a few years of dedicated fundraising, the group established a Mission under the Antiochian Orthodox Christian Archdiocese of North America. This was the first step towards realizing their dream of founding a church. With unwavering faith and hard work, they demonstrated their commitment by assigning a full-time pastor and setting clear goals for the future. </p>
					<p>The community's tireless efforts, through bake sales, raffles, charity dinners, and member donations, quickly elevated the organization's status to that of a Church. <!--more--> Even before they had a permanent building, they rented halls and church basements to conduct the Divine Liturgy every Sunday and celebrate other Orthodox feasts. They also established vital organizations such as the Antiochian Women, Church Choir, Teen SOYO, and Church School, which strengthened the church's spiritual foundation. Members generously donated their time, skills, and connections to gather building materials and services, leading to the construction of their church building, which was completed in June 1981. On June 14th of that year, St. Philip Antiochian Orthodox Church was officially consecrated by the Most Reverent Metropolitan Philip, becoming the first church in the Antiochian Christian Archdiocese of North America to be established in Western Canada.</p>
					<p>Today, the church, with a few renovations and improvements, still stands proudly at 15804 - 98 Avenue in Edmonton. St. Philip has grown to include approximately 100 families and over 200 individuals. The various church organizations continue to play a vital role in the community, providing a spiritual foundation and catering to both its bilingual population in English and Arabic, and the newer generations predominantly in English. The church also preserves many cherished ethnic traditions.</p>
					<p>Through cooperation, hard work, sacrifice, and a deep commitment to God, St. Philip Church has turned a dream into a reality. As we celebrate 46 years, we look forward to many more years of growth and spiritual fulfillment, guided by these enduring values and the will of God.</p>
					<!-- 
					THIS IS FOR READ MORE FUNCTIONALITY THAT I HAVEN'T FIGURE OUT YET

					<a href="#read-more-history" class="read-more">Read More</a>
					<div id="read-more-history" class="more-content">
						/insert more content here/
					</div> 
					-->
				</section>

				<section>
					<!-- Parish Message ACF field group-->
					<?php
					$parish_message_title = wp_kses_post(get_field('title'));
					$parish_message = wp_kses_post(get_field('parish_message'));
					$parish_name = wp_kses_post(get_field('parish_name'));
					?>
					<!-- Need ACF plugin for it to not throw error in your local copy -->
					<h2>
						<?php echo $parish_message_title; ?>
					</h2>
					<?php echo $parish_message; ?>
					<address>
						<?php echo $parish_name; ?>
					</address>
					<!--
					THIS IS FOR READ MORE FUNCTIONALITY THAT I HAVEN'T FIGURE OUT YET

					<a href="#read-more-parish" class="read-more">Read More</a>
					<div id="read-more-parish" class="more-content">
					/insert more content here/
					</div>
					-->
				</section>

				<!-- OUR SOCIALS SECTION-->
				<section>
					<h2>Our Socials</h2>
					<ul class="social-links">
						<li>
							<a href="https://www.facebook.com/stphilipedmonton/" aria-label="Visit St. Philip's Facebook page" class="social-link">St.Philip Facebook <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
						</li>
						<li>
							<a href="#" aria-label="Visit St. Philip's Youtube page" class="social-link">St.Philip Youtube <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
						</li>
					</ul>
				</section>

				<!-- FIND US HERE SECTION -->
				<section>
					<h2>Find Us Here</h2>
					<address>
						15804 98 Ave NW, Edmonton AB
					</address>
				</section>
			</div>
			<!-- end of .entry-content -->

			<!-- This is to show the admin the Edit button -->
			<?php if (get_edit_post_link()) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Edit <span class="screen-reader-text">%s</span>', 'st_philip'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
			<!-- End of the Admin Edit button -->
		</section>
		<!-- This is for debugging: to show the post ID, it wont show in the page  -->
		<!-- end of #post-<?php the_ID(); ?> -->
	<?php endwhile; ?>
</main><!-- end of #main -->

<?php
/* Get the footer template part*/
get_footer();
