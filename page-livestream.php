<?php

/**
 * The template for displaying the Livestream Page
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
<?php $livestream_video_url = wp_kses_post(get_field('video_url'));?>

	<section id="livestream" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<!-- entry content -->
		<div class="entry-content">
			<div class="fb-video responsive-iframe" data-href="			<?php echo $livestream_video_url ?>" data-width="auto" data-show-text="false" data-allowfullscreen="true" data-lazy="true" data-show-captions="true">
				<blockquote cite="			<?php echo $livestream_video_url ?>/" class="fb-xfbml-parse-ignore"><a href="			<?php echo $livestream_video_url ?>/"></a>
					<p></p>Posted by <a href="https://www.facebook.com/stphilipedmonton">St. Philip Antiochian Orthodox Church</a> on Sunday, March 30, 2025
				</blockquote>
			</div>

				<section>
					<h2>Our Service Times</h2>
					<div>
						<ul class="service-times">
							<li><time datetime="09:20">9:20 AM</time> Orthros (Matins)</li>
							<li><time datetime="10:20">10:20 AM</time> Divine Liturgy</li>
						</ul>
					</div>
				</section>
				<nav>
					<h2>Follow Our Socials</h2>
					<ul class="social-links">
						<li>
	
							<a href="https://www.facebook.com/stphilipedmonton/" aria-label="Visit St. Philip's Facebook page" class="social-link default-button">St.Philip Facebook <i class="fa-solid fa-arrow-up-right-from-square"></i>
							</a>
	
						</li>
						<li>
	
							<a href="https://www.youtube.com/@St.Philip.Orthodox.Church" aria-label="Visit St. Philip's Youtube page" class="social-link default-button">St.Philip Youtube <i class="fa-solid fa-arrow-up-right-from-square"></i>
							</a>
	
						</li>
					</ul>
				</nav>
		</div>
		<!-- .entry-content -->

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
	</section><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php
/* Get the footer template part*/
get_footer();
?>

<!-- this is just in case it wont work -->
 		<!-- <section>
				<h2>Past Streams</h2>
				<div>
					<div>
						<iframe class="responsive-iframe" width="100%" max-height="450" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<p>Date</p>
					</div>

					<div>
						<iframe class="responsive-iframe" width="100%" max-height="450" src="https://www.youtube.com/embed/OJX06i3tkEE?si=td1aZ8N_bUPJvPce" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<p>Date</p>
					</div>

				</div>
			</section> -->