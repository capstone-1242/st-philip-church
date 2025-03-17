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

			<address>
				<h2>Fr. Dmitri Info</h2>
				<a href="mailto:jim@example.com">stphilippriest1978@gmail.com </a><br />
				<a href="tel:+14155550132">780-489-7943</a>
			</address>

			<!-- has to add adress  -->
			<form action="#">
				<legend>Send us a message</legend>
				<div>
					<label for="full_name">Full Name</label>
					<input type="text" name="full_name" id="full_name">
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email">
				</div>
				<div>
					<label for="denomination">Denomination</label>
					<select name="denomination" id="denomination">
					<option value="">Select One..</option>
						<option value="orthodox">I am Orthodox</option>
						<option value="catholic">I am Catholic</option>
						<option value="protestant">I am Protestant</option>
						<option value="angelian">I am Angelian</option>
						<option value="lutheran">I am Lutheran</option>
						<option value="evangelical">I am Evangelical</option>
						<option value="non-christian">I am not currently Christian</option>
						<option value="undetermined">I would rather not say</option>
					</select>
				</div>

				<div>
					<label for="message">Message</label>
					<textarea name="message" id="message" placeholder="Write message here"></textarea>
				</div>

				<input type="submit" aria-label="send the form"/>

			</form>


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
