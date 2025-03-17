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

				<button class="accordion">The Story of The Holy Eucharist</button>
				<div class="panel">
					<p>The principal worship service of the Orthodox Church is the ritual meal known as the Holy Eucharist (from the Greek εὐχαριστία, meaning “thanksgiving”). The celebration of the Eucharist is as old as the Church itself, going all the way back to Jesus’ institution of the meal in the upper room with his disciples “in the night in which he was betrayed” (1 Cor 11:23-26). Beginning in Jerusalem and then spreading throughout the world, Christians have faithfully followed Jesus’ commandment to “do this in remembrance of me.” .</p>
					<!-- MARKED!!! NOT SURE ABOUT THE MARKUP OF THIS -->
					<section>
						<h3>Why is this the principal form of Christian worship?</h3>
						<p>In Jesus’ words “Truly, truly, I say to you, unless you eat the flesh of the Son of Man and drink his blood, you have no life in you” (John 6:53).
						</p>
						<p>In the Eucharist, we offer ourselves as a living sacrifice to God (Romans 12:1), and God presents to us in the bread and the wine. Christ’s one, complete, sacrifice on the Cross,was so that we may partake of Christ’s very life, his Body and Blood: “Take, eat, this is my Body which is for you…” (Luke 22:19-20).</p>
					</section>
				</div>

				<button class="accordion">Distinction of the East and West</button>
				<div class="panel">
					<p>As the Church grew to include various people groups and their languages, the original Eucharistic service from Jerusalem was developed and adorned by those various peoples according to their unique musical and artistic expressions, poetic traditions, and senses of beauty, dignity, and piety.</p>

					<p>The largely Greek speaking eastern half of the Roman Empire (later called the Byzantine Empire) would come to call the celebration of the Eucharist “the Divine Liturgy” (Liturgy from the Greek λειτουργία,meaning “work of the people”).</p>

					<p>In the western part of the Roman Empire, where the legacy of old Roman culture was more established and Latin was the lingua franca, the Eucharist came to be called the “Missa,” or “the Mass” in English. This word comes from the final dismissal of the service in Latin: “Ite, missa est” (or “Go, this is the sending out”).</p>

					<p>Though many of the sights, sounds, and particular words of the Eucharistic services of the Eastern and Western traditions are different, the structures of both are very much alike, because both grew organically out of that original primitive Liturgy of the earliest Christians in Jerusalem.</p>

				</div>

				<button class="accordion">The Evolution of Liturgy3</button>
				<div class="panel">
					<p>The basic shape of the Liturgy in both the East and the West has two main parts, the Liturgy of the Catechumens and the Liturgy of the Faithful. In the early Church, catechumens (those preparing to join the Church) would be dismissed after the first part of the teachings, and only the full members of the Church (the “faithful”) would remain for the second part of the teachings.</p>

					<p>As the practice of dismissing the catechumens between each part has largely disappeared, the two main parts of the Liturgy are now sometimes called the Liturgy of the Word and the Liturgy of the Eucharist.</p>
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
