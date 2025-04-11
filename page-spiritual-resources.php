<?php

/**
 * The template for displaying the Spiritual Resources Page
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

	<section id="spiritual-resources-page" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<!-- entry content -->
		<div class="entry-content">
		<div class="page-featured-image">
				<?php if (has_post_thumbnail()) :
					st_philip_post_thumbnail();
				else: ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/spiritual-resources-image-placeholder.webp'); ?>" alt="Church Ceiling">
				<?php endif; ?>
			</div>

			<section>
				<h2>Orthodox Teachings & Stories</h2>

				<!-- ACCORDION -->
				<div class="accordion-container">

					<!-- accordion 1 -->
					<div>
						<h3><button id="accordion-header-1" class="accordion" role="button" aria-controls="accordion-panel-1" aria-expanded="false"
								data-accordion-header>Maintenance of Liturgical Foundations <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-1" class="panel" aria-labelledby="accordion-header-1" aria-hidden="true">
							<p>Central to the allure of Orthodoxy is its adherence to ancient worship practices that evoke a sense of reverence and awe. The celebration of the Eucharist, also known as the Divine Liturgy, is at the heart of Orthodox worship. This liturgy is based on ancient forms, incorporating Byzantine chants, traditional hymns, and elaborate robes, creating a solemn and sacred atmosphere. The meticulous attention to detail reflects our deep respect for tradition and a desire to connect with the spiritual essence of early Christianity.</p>
						</section>
					</div>

					<!-- accordion 2 -->
					<div>
						<h3>
							<button id="accordion-header-2" class="accordion" role="button" aria-controls="accordion-panel-2" aria-expanded="false"
								data-accordion-header>Theological Teachings <i class="fa-solid fa-chevron-down"></i></button>
						</h3>
						<section id="accordion-panel-2" class="panel" aria-labelledby="accordion-header-2" aria-hidden="true">
							<p>Orthodox theology is deeply rooted in the teachings of the Church Fathers and the decisions of the Ecumenical Councils. Key theological concepts include the Holy Trinity, the Incarnation, and theosis or deification(glorification). The Orthodox Church emphasizes the mystery of faith, encouraging believers to experience God through worship, sacraments, and communal and/or personal prayer.</p>
						</section>
					</div>

					<!-- accordion 3 -->
					<div>
						<h3><button id="accordion-header-3" class="accordion" role="button" aria-controls="accordion-panel-3" aria-expanded="false"
								data-accordion-header>Our Iconography: The Windows to Heaven <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-3" class="panel" aria-labelledby="accordion-header-3" aria-hidden="true">
							<p>Icons hold a special place in Orthodox spirituality. These sacred images are considered "windows to heaven," offering a visual theology that teaches and inspires. Icons are revered, not worshipped, and they play a crucial role in both public worship and private devotion. The process of creating an icon, called "writing" an icon, is itself a spiritual practice.
							</p>
						</section>
					</div>

					<!-- accordion 4 -->
					<div>
						<h3><button id="accordion-header-4" class="accordion" role="button" aria-controls="accordion-panel-4" aria-expanded="false"
								data-accordion-header>Sacraments: Events of Holy Connection <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-4" class="panel" aria-labelledby="accordion-header-4" aria-hidden="true">
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
						</section>
					</div>

					<!-- accordion 5 -->
					<div>
						<h3>
							<button id="accordion-header-5" class="accordion" role="button" aria-controls="accordion-panel-5" aria-expanded="false"
								data-accordion-header>The Story of The Holy Eucharist <i class="fa-solid fa-chevron-down"></i></button>
						</h3>
						<section id="accordion-panel-5" class="panel" aria-labelledby="accordion-header-5" aria-hidden="true">
							<p>The principal worship service of the Orthodox Church is the ritual meal known as the Holy Eucharist (from the Greek εὐχαριστία, meaning “thanksgiving”). The celebration of the Eucharist is as old as the Church itself, going all the way back to Jesus’ institution of the meal in the upper room with his disciples “in the night in which he was betrayed” (1 Cor 11:23-26). Beginning in Jerusalem and then spreading throughout the world, Christians have faithfully followed Jesus’ commandment to “do this in remembrance of me.” .</p>
							<!-- MARKED!!! NOT SURE ABOUT THE MARKUP OF THIS -->
							<section>
								<h4>Why is this the principal form of Christian worship?</h4>
								<p>In Jesus’ words “Truly, truly, I say to you, unless you eat the flesh of the Son of Man and drink his blood, you have no life in you” (John 6:53).
								</p>
								<p>In the Eucharist, we offer ourselves as a living sacrifice to God (Romans 12:1), and God presents to us in the bread and the wine. Christ’s one, complete, sacrifice on the Cross,was so that we may partake of Christ’s very life, his Body and Blood: “Take, eat, this is my Body which is for you…” (Luke 22:19-20).</p>
							</section>
						</section>
					</div>

					<!-- accordion 6 -->
					<div>
						<h3><button id="accordion-header-6" class="accordion" role="button" aria-controls="accordion-panel-6" aria-expanded="false"
								data-accordion-header>Distinction of the East and West <i class="fa-solid fa-chevron-down"></i></button></h3>
						<section id="accordion-panel-6" class="panel" aria-labelledby="accordion-header-6" aria-hidden="true">
							<p>As the Church grew to include various people groups and their languages, the original Eucharistic service from Jerusalem was developed and adorned by those various peoples according to their unique musical and artistic expressions, poetic traditions, and senses of beauty, dignity, and piety.</p>

							<p>The largely Greek speaking eastern half of the Roman Empire (later called the Byzantine Empire) would come to call the celebration of the Eucharist “the Divine Liturgy” (Liturgy from the Greek λειτουργία,meaning “work of the people”).</p>

							<p>In the western part of the Roman Empire, where the legacy of old Roman culture was more established and Latin was the lingua franca, the Eucharist came to be called the “Missa,” or “the Mass” in English. This word comes from the final dismissal of the service in Latin: “Ite, missa est” (or “Go, this is the sending out”).</p>

							<p>Though many of the sights, sounds, and particular words of the Eucharistic services of the Eastern and Western traditions are different, the structures of both are very much alike, because both grew organically out of that original primitive Liturgy of the earliest Christians in Jerusalem.</p>

						</section>
					</div>

					<!-- accordion 7 -->
					<div>
						<h3>
							<button id="accordion-header-7" class="accordion" role="button" aria-controls="accordion-panel-7" aria-expanded="false"
								data-accordion-header>The Evolution of Liturgy <i class="fa-solid fa-chevron-down"></i></button>
						</h3>
						<section id="accordion-panel-7" class="panel" aria-labelledby="accordion-header-7" aria-hidden="true">
							<p>The basic shape of the Liturgy in both the East and the West has two main parts, the Liturgy of the Catechumens and the Liturgy of the Faithful. In the early Church, catechumens (those preparing to join the Church) would be dismissed after the first part of the teachings, and only the full members of the Church (the “faithful”) would remain for the second part of the teachings.</p>

							<p>As the practice of dismissing the catechumens between each part has largely disappeared, the two main parts of the Liturgy are now sometimes called the Liturgy of the Word and the Liturgy of the Eucharist.</p>
						</section>
					</div>
				</div>

				<!-- END OF ACCORDION -->
			</section>


			<nav aria-labelledby="extra-resources">
				<h2 id="extra-resources">Extra Resources</h2>
				<p>These extra links provide more information about the Orthodox Church:</p>
				<ul>
					<li><a href="https://www.antiochian.org/home" rel="noreferrer" target="_blank">The Antiochian Orthodox Archdiocese of North America</a></li>
					<li><a href="https://www.antiochpatriarchate.org/en/home/" rel="noreferrer" target="_blank">Greek Orthodox Patriarch of Antioch and All the East</a></li>
					<li><a href="https://www.ancientfaith.com/" rel="noreferrer" target="_blank">Ancient Faith Ministries </a></li>
					<li><a href="https://www.oca.org/orthodoxy/the-orthodox-faith" rel="noreferrer" target="_blank">The Orthodox Faith by Protopresbyter Thomas Hopko</a></li>
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