<?php

/**
 * The template for displaying the Worship Service FAQ Page
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

	<section id="worship-page" <?php post_class(); ?>>
		<!-- .entry-header -->
		<header class="entry-header">
			<h1 class="entry-title">Worship Service Frequently Asked Questions (FAQ)</h1>
		</header>
		<!-- entry content -->
		<div class="entry-content">

			<!-- Featured Image -->
			<!-- Client has to choose featured image for every page or set a default picture-->
			<div class="page-featured-image">
				<?php if (has_post_thumbnail()) :
					st_philip_post_thumbnail();
				else: ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/worship-image-placeholder.webp'); ?>" alt="Church Ceiling">
				<?php endif; ?>
			</div>
			<!-- End of Featured Image -->

			<section>
				<h2>Our Service Times</h2>
				<div>
					<ul class="service-times">
						<li><time datetime="09:20">9:20 AM</time> Orthros (Matins)</li>
						<li><time datetime="10:20">10:20 AM</time> Divine Liturgy</li>
					</ul>
				</div>
			</section>


			<section>
				<h2>FAQ: The Divine Liturgy & Orthodoxy Life</h2>
				<p>What follows below delves into various aspects of Orthodoxy, providing insights for those interested in understanding the connection between Divine Liturgy and Orthodox Christian life. Do not hesitate to contact us or attend a service to gain a better understanding.
				</p>

				<!-- accordion container-->
				<div class="accordion-container">

					<!-- accordion 1 -->
					<div>
						<h3><button id="accordion-header-1" class="accordion" role="button" aria-controls="accordion-panel-1" aria-expanded="false"
								data-accordion-header>What is an Orthodox Life? <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-1" class="panel" aria-labelledby="accordion-header-1" aria-hidden="true">
							<p>An orthodox life is a combination of Divine Liturgy and Orthodox Christian life. </p>
						</section>
					</div>

					<!-- accordion 2 -->
					<div>
						<h3><button id="accordion-header-2" class="accordion" role="button" aria-controls="accordion-panel-2" aria-expanded="false"
								data-accordion-header>What is the importance of an Orthodox Church? <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-2" class="panel" aria-labelledby="accordion-header-1" aria-hidden="true">
							<p>The Orthodox Church traces its origins to the very feast of Pentecost and the earliest days of Christianity. It has preserved the apostolic faith through centuries of theological development, cultural exchange, and historical events. Understanding the history of the Orthodox Church involves 3 topics:
							</p>
							<ol>
								<li><a href="https://orthodoxwiki.org/Ecumenical_Councils">Exploring the Ecumenical Councils</a></li>
								<li><a href="https://christianhistoryinstitute.org/magazine/article/east-west-schism">The Great Schism of 1054</a></li>
								<li><a href="https://www.britannica.com/topic/Eastern-Orthodoxy/History">The spread of Orthodoxy across the Byzantine Empire and beyond</a></li>
							</ol>
						</section>
					</div>

					<!-- accordion 3 -->
					<div>
						<h3><button id="accordion-header-3" class="accordion" role="button" aria-controls="accordion-panel-3" aria-expanded="false"
								data-accordion-header>Why are there Feasting and Fasting Days? <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-3" class="panel" aria-labelledby="accordion-header-1" aria-hidden="true">
							<p>The liturgical calendar of the Orthodox Church is filled with feast days and periods of fasting.</p>
							<ul>
								<li>Major feasts celebrate the life of Christ, the Theotokos (Mother of God), and the saints. </li>
								<li>Fasting periods, such as Great Lent, are times of spiritual renewal, marked by increased prayer, almsgiving, and abstinence from certain foods. This reminds us how dependent we are on God’s sustenance.</li>
							</ul>
						</section>
					</div>

					<!-- accordion 4 -->
					<div>
						<h3>
							<button id="accordion-header-4" class="accordion" role="button" aria-controls="accordion-panel-4" aria-expanded="false"
								data-accordion-header>What is a typical service procession? <i class="fa-solid fa-chevron-down"></i></button>
						</h3>
						<section id="accordion-panel-4" class="panel" aria-labelledby="accordion-header-1" aria-hidden="true">
							<section>
								<h4>Part 1: The Liturgy of the Catechumens</h4>
								<ol>
									<li>Entrance - This includes prayers and chants at the beginning of the service. In the East, it features the Great Litany and three antiphons, as well as the Troparia and Kontakia. In the West, it includes the Kyrie, Gloria, and the Introit and Collects.</li>
									<li>Proclamation - Scripture passages are proclaimed in both the East and West, accompanied by special chants, such as the Gradual and Alleluia or Tract in the West, along with verses for the day.
									</li>
									<li>Homily - In both the East and West, it is customary to follow the Gospel reading with a homily, typically focused on the Gospel passage or the theme of the day.</li>
								</ol>
							</section>
							<section>
								<h4>Part 2: The Liturgy of the Faithful</h4>
								<ol>
									<li>Nicene Creed - The word “creed” comes from its Latin beginning, Credo (“I believe”). The East calls the Creed the “Symbol of Faith”.</li>
									<li>Oblation - The gifts of bread and wine are brought to the altar with reverence. In the West, this is done solemnly and directly, while in the East, the gifts are processed into the Nave during the Great Entrance. The Eastern Liturgy follows with the Cherubic Hymn, while the West sings the Offertory chant, often followed by a hymn. The Western offertory prayers are offered here, similar to the Prothesis in the Eastern Liturgy.
									</li>
									<li>Consecration - In both Eastern and Western rites, the priest begins with the words, “Lift up your hearts” (Sursum corda). And for both rites, the Eucharistic prayers share the same essential features: they are addressed to the Father, include Jesus’ words of institution, invoke the Holy Spirit to change the bread and wine into Christ’s body and blood, and conclude with a Trinitarian doxology</li>
									<li>Communion - The faithful then receive both the Body & Blood (administered with a spoon in the East, and usually through intinction (dipping of the bread in the wine) and received together in the West), while hymns may be sung. Bread that has been blessed (but not consecrated) is offered to all (antidoron in the East, panis benedictus in the West).</li>
									<li>Dismissal - After the remaining Eucharist is properly cared for, the priest dismisses and blesses the people.</li>
								</ol>
							</section>
						</section>
					</div>
				</div>

				<div>
					<p>Want to read more about the history of the church? Check out</p>
					<a href="<?php echo esc_url(get_permalink(86)) ?>" class="default-button">Our Library <i class="fa-solid fa-arrow-up-right-from-square"></i></a>

				</div>
			</section>

			<!-- end of accordion -->

			<?php
			// the_content(); 

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
					'after'  => '</div>',
				)
			);
			?>
		</div>

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
	</section><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
