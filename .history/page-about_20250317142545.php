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

			<section>
				<h2>History</h2>
				<p>In September 1978, after just a few years of dedicated fundraising, the group established a Mission under the Antiochian Orthodox Christian Archdiocese of North America. This was the first step towards realizing their dream of founding a church. With unwavering faith and hard work, they demonstrated their commitment by assigning a full-time pastor and setting clear goals for the future. </p>

				<p>The community's tireless efforts, through bake sales, raffles, charity dinners, and member donations, quickly elevated the organization's status to that of a Church. Even before they had a permanent building, they rented halls and church basements to conduct the Divine Liturgy every Sunday and celebrate other Orthodox feasts. They also established vital organizations such as the Antiochian Women, Church Choir, Teen SOYO, and Church School, which strengthened the church's spiritual foundation. Members generously donated their time, skills, and connections to gather building materials and services, leading to the construction of their church building, which was completed in June 1981. On June 14th of that year, St. Philip Antiochian Orthodox Church was officially consecrated by the Most Reverent Metropolitan Philip, becoming the first church in the Antiochian Christian Archdiocese of North America to be established in Western Canada.</p>

				<p>Today, the church, with a few renovations and improvements, still stands proudly at 15804 - 98 Avenue in Edmonton. St. Philip has grown to include approximately 100 families and over 200 individuals. The various church organizations continue to play a vital role in the community, providing a spiritual foundation and catering to both its bilingual population in English and Arabic, and the newer generations predominantly in English. The church also preserves many cherished ethnic traditions.</p>

				<p>Through cooperation, hard work, sacrifice, and a deep commitment to God, St. Philip Church has turned a dream into a reality. As we celebrate 46 years, we look forward to many more years of growth and spiritual fulfillment, guided by these enduring values and the will of God.</p>
			</section>

			<section>
				<h2>
					A Message from Fr. Micheal
				</h2>
				<p>Dear Friends,</p>

				<p>I warmly invite you to explore the profound richness of the Orthodox faith with us at St. Philip's Orthodox Church. Join us in experiencing the prayer and worship of the early Church—a tradition that has flourished for 2000 years, enduring worldly turmoil and persecution to this very day. Come and witness the beauty of the Divine Liturgy, uniquely celebrated in both English and Arabic, offering a chance to reconnect with the worship practices of early Christianity.</p>

				<p>Over the past 50 years, the landscape of faith and worship in Canada has undergone significant changes. Church attendance, once a regular part of life, has become something often reserved for Easter and Christmas. Various factors have contributed to this shift, including churches losing relevance to daily life, a shift in focus from God to social concerns, doctrinal changes, and challenges in passing on the faith to younger generations.</p>

				<p>Yet, amidst these changes, many still yearn for a deeper spiritual connection beyond the material pursuits that often leave us unfulfilled. If you are searching for something more in your life—a profound connection to God and a return to worship rooted in the traditions of the early Church—I personally invite you to pray with us.</p>

				<p>Whether you are just beginning your spiritual journey or have been on this quest for what feels like an eternity, please know that you are always welcome. At St. Philip's, we invite you to discover spirituality, embrace solid biblical teachings, and delve into the doctrines of the early Church. We offer a spiritual home where the teachings of the apostles are upheld through traditional worship, focusing on offering praise to God. Our services are conducted in English and Arabic, honoring our founders and welcoming to those from different cultures.</p>

				<p>St. Philip's is committed to being a community firmly grounded in liturgical tradition and upholding the truths of the Holy Orthodox Church. For those embarking on a spiritual quest, I encourage you to reach out for more information.</p>

				<p>As the woman at the well said to her friends and neighbors: Come and See!</p>

				<p>May God bless you, and I look forward to meeting you.</p>

				<!-- not sure whether to put this in address tag but put it anyway -->

				<address>
					Fr. Michael+
				</address>
			</section>


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
