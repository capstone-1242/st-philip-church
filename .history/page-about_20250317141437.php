<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<!-- featured image -->
		<?php st_philip_post_thumbnail(); ?>
		<!-- end of featured image -->

		<!-- entry content -->
		<div class="entry-content">

			<h2>History</h2>
			<p>In September 1978, after just a few years of dedicated fundraising, the group established a Mission under the Antiochian Orthodox Christian Archdiocese of North America. This was the first step towards realizing their dream of founding a church. With unwavering faith and hard work, they demonstrated their commitment by assigning a full-time pastor and setting clear goals for the future.

				The community's tireless efforts, through bake sales, raffles, charity dinners, and member donations, quickly elevated the organization's status to that of a Church. Even before they had a permanent building, they rented halls and church basements to conduct the Divine Liturgy every Sunday and celebrate other Orthodox feasts. They also established vital organizations such as the Antiochian Women, Church Choir, Teen SOYO, and Church School, which strengthened the church's spiritual foundation. Members generously donated their time, skills, and connections to gather building materials and services, leading to the construction of their church building, which was completed in June 1981. On June 14th of that year, St. Philip Antiochian Orthodox Church was officially consecrated by the Most Reverent Metropolitan Philip, becoming the first church in the Antiochian Christian Archdiocese of North America to be established in Western Canada.

				Today, the church, with a few renovations and improvements, still stands proudly at 15804 - 98 Avenue in Edmonton. St. Philip has grown to include approximately 100 families and over 200 individuals. The various church organizations continue to play a vital role in the community, providing a spiritual foundation and catering to both its bilingual population in English and Arabic, and the newer generations predominantly in English. The church also preserves many cherished ethnic traditions.

				Through cooperation, hard work, sacrifice, and a deep commitment to God, St. Philip Church has turned a dream into a reality. As we celebrate 46 years, we look forward to many more years of growth and spiritual fulfillment, guided by these enduring values and the will of God.
			</p>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		<!-- .entry-content -->

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
	</article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
