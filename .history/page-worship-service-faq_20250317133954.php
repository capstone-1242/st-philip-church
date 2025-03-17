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

		<?php st_philip_post_thumbnail(); ?>

		<div class="entry-content">

			<h2>Our Service Times</h2>
			<div>
				<div><span>9:20 AM</span>Orthros (Matins)</div>
				<div><span>10:20 AM</span>Divine Liturgy</div>
			</div>

			<h2>FAQ: The Divine Liturgy & Orthodoxy Life</h2>
			<p>What follows below delves into various aspects of Orthodoxy, providing insights for those interested in understanding the connection between Divine Liturgy and Orthodox Christian life. Do not hesitate to contact us or attend a service to gain a better understanding.
			</p>

			<!-- accordion -->
			<button class="accordion">What is an Orthodox Life?</button>
			<div class="panel">
				<p>An orthodox life is a combination of Divine Liturgy and Orthodox Christian life. </p>
			</div>

			<button class="accordion">What is the importance of an Orthodox Church?</button>
			<div class="panel">
				<p>The Orthodox Church traces its origins to the very feast of Pentecost and the earliest days of Christianity. It has preserved the apostolic faith through centuries of theological development, cultural exchange, and historical events. Understanding the history of the Orthodox Church involves 3 topics:
				</p>
				<ol>
					<li>Exploring the Ecumenical Councils</li>
					<li>The Great Schism of 1054</li>
					<li>The spread of Orthodoxy across the Byzantine Empire and beyond</li>
				</ol>
			</div>

			<button class="accordion">Why are there Feasting and Fasting Days?</button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

			<button class="accordion">What is a typical service procession?</button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

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
	</article><!-- #post-<?php the_ID(); ?> -->


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
