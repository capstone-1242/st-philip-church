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
				<h2>Orthodox Teachings & Stories</h2>
				<button class="accordion">Maintenance of Liturgical Foundations</button>
				<div class="panel">
					<p>Central to the allure of Orthodoxy is its adherence to ancient worship practices that evoke a sense of reverence and awe. The celebration of the Eucharist, also known as the Divine Liturgy, is at the heart of Orthodox worship. This liturgy is based on ancient forms, incorporating Byzantine chants, traditional hymns, and elaborate robes, creating a solemn and sacred atmosphere. The meticulous attention to detail reflects our deep respect for tradition and a desire to connect with the spiritual essence of early Christianity.</p>
				</div>

				<button class="accordion">Theological Teachings</button>
				<div class="panel">
					<p>Orthodox theology is deeply rooted in the teachings of the Church Fathers and the decisions of the Ecumenical Councils. Key theological concepts include the Holy Trinity, the Incarnation, and theosis or deification(glorification). The Orthodox Church emphasizes the mystery of faith, encouraging believers to experience God through worship, sacraments, and communal and/or personal prayer.</p>
				</div>

				<button class="accordion">Our Iconography: The Windows to Heaven</button>
				<div class="panel">
					<p>The Orthodox Church celebrates seven Holy Mysteries (sacraments):</p>
					<ol>
						<li>Baptism</li>
						<li>Chrismation</li>
						<li>Eucharist (Holy Communion)</li>
						<li>Confession</li>
						<li>Marriage</li>
						<li>Holy Orders</li>
						<li>Anointing of the Sick</li>
					</ol>
					<p>
						Each sacrament is a means of receiving God's grace, nurturing the spiritual life of believers. The Eucharist, also known as Holy Communion, is particularly central, as it reflects the real presence of Christ.
					</p>
				</div>

				<h2>Orthodox Teachings & Stories</h2>
				<button class="accordion">Section 1</button>
				<div class="panel">
					<p>Lorem ipsum...</p>
				</div>

				<button class="accordion">Section 2</button>
				<div class="panel">
					<p>Lorem ipsum...</p>
				</div>

				<button class="accordion">Section 3</button>
				<div class="panel">
					<p>Lorem ipsum...</p>
				</div>

				<button class="accordion">Section 3</button>
				<div class="panel">
					<p>Lorem ipsum...</p>
				</div>
			</section>

			<section>
				<h2>Extra Resources</h2>
				<p>These extra links provide more information about the Orthodox Church.</p>
				<ul>
					<li><a href="https://www.antiochian.org/home">The Antiochian Orthodox Archdiocese of North America</a></li>
					<li><a href="https://www.antiochpatriarchate.org/en/home/">Greek Orthodox Patriarch of Antioch and All the East - بطريرك أنطاكية وسائر المشرق للروم الأرثوذكس </a></li>
					<li><a href="https://www.ancientfaith.com/">Ancient Faith Ministries </a></li>
					<li><a href="https://www.oca.org/orthodoxy/the-orthodox-faith">The Orthodox Faith by Protopresbyter Thomas Hopko</a></li>
				</ul>
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
