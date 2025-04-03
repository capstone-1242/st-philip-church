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
		<section id="about-page" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header><!-- .entry-header -->

			<!-- entry content -->
			<div class="entry-content">
				<section>
					<div class="history-image-container">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/church-ceiling.webp') ?>" alt="Church Ceiling covered with intricate artwork">
					</div>
					<h2>History</h2>
					<p>In September 1978, after just a few years of dedicated fundraising, the group established a Mission under the Antiochian Orthodox Christian Archdiocese of North America. This was the first step towards realizing their dream of founding a church. With unwavering faith and hard work, they demonstrated their commitment by assigning a full-time pastor and setting clear goals for the future. </p>

					<div id="more-history-content" hidden>
						<p>The community's tireless efforts, through bake sales, raffles, charity dinners, and member donations, quickly elevated the organization's status to that of a Church. <!--more--> Even before they had a permanent building, they rented halls and church basements to conduct the Divine Liturgy every Sunday and celebrate other Orthodox feasts. They also established vital organizations such as the Antiochian Women, Church Choir, Teen SOYO, and Church School, which strengthened the church's spiritual foundation. Members generously donated their time, skills, and connections to gather building materials and services, leading to the construction of their church building, which was completed in June 1981. On June 14th of that year, St. Philip Antiochian Orthodox Church was officially consecrated by the Most Reverent Metropolitan Philip, becoming the first church in the Antiochian Christian Archdiocese of North America to be established in Western Canada.</p>
						<p>Today, the church, with a few renovations and improvements, still stands proudly at 15804 - 98 Avenue in Edmonton. St. Philip has grown to include approximately 100 families and over 200 individuals. The various church organizations continue to play a vital role in the community, providing a spiritual foundation and catering to both its bilingual population in English and Arabic, and the newer generations predominantly in English. The church also preserves many cherished ethnic traditions.</p>
						<p>Through cooperation, hard work, sacrifice, and a deep commitment to God, St. Philip Church has turned a dream into a reality. As we celebrate 46 years, we look forward to many more years of growth and spiritual fulfillment, guided by these enduring values and the will of God.</p>
					</div>
					<button class="read-more-history read-more-button" aria-expanded="false" aria-controls="more-history-content">Read more <i class="fa-solid fa-chevron-down"></i></button>

				</section>

				<section>
					<!-- Parish Message ACF field group-->
					<?php
					$parish_message_title = wp_kses_post(get_field('title'));
					$parish_message = wp_kses_post(get_field('parish_message'));
					$parish_name = wp_kses_post(get_field('parish_name'));
					?>
					<h2>
						<?php echo $parish_message_title; ?>
					</h2>
					<div id="parish-message-preview">
						<?php
						$paragraphs = explode('</p>', $parish_message);
						$visible_paragraphs = array_slice($paragraphs, 0, 2);
						echo implode('</p>', $visible_paragraphs) . '</p>';
						?>

					</div>
					
					<div id="full-parish-message" hidden>
						<div>
							<?php echo $parish_message; ?>
						</div>
						<address>
							<?php echo $parish_name; ?>
						</address>
					</div>
					<button class="read-more-message read-more-button" aria-expanded="false" aria-controls="more-message">Read more <i class="fa-solid fa-chevron-down"></i></button>

					<div class="page-featured-image">
						<?php if (has_post_thumbnail()) :
							st_philip_post_thumbnail();
						else: ?>
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/old-guy-reading.webp'); ?>" alt="Old Guy reading a long paper document">
						<?php endif; ?>
					</div>



				</section>

				<!-- OUR SOCIALS SECTION-->
				<div>
					<section>
						<h2>Our Socials</h2>
						<ul class="social-links">
							<li>
								<a href="https://www.facebook.com/stphilipedmonton/" aria-label="Visit St. Philip's Facebook page" class="social-link default-button">St.Philip Facebook <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/@St.Philip.Orthodox.Church" aria-label="Visit St. Philip's Youtube page" class="social-link default-button">St.Philip Youtube <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
