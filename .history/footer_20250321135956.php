<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st_philip
 */

?>

<footer id="colophon" class="site-footer">
	<section class="site-branding">
		<a href="<?php echo get_home_url(); ?>" class="navbar-brand text-end front-page-anchor">
			<?php if (has_custom_logo()) : ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.webp" alt="Site Logo" class="site-logo-img" />
			<?php endif; ?>
		</a>
		<h2><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">St. Philip Antiochian Orthodox Church</a></h2>
		<section class="footer-church-info">
			<h3>Join us every Sunday</h3>
			<div class="church-hours">
				<div><span>9:20 AM</span>Orthros (Matins)</div>
				<div><span>10:20 AM</span>Divine Liturgy</div>
			</div>
			<div class="church-location">
				<p>15804 98 Ave NW, Edmonton AB T5P 4R9, Canada</p>
			</div>
		</section>
	</section>

	<nav id="site-navigation" class="footer-navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer-navigation',
				'menu_id'        => 'footer-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
	<!-- <div class="site-info">

		<a href="?php echo esc_url(__('https://wordpress.org/', 'st_philip')); ?>">
			?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'st_philip'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'st_philip'), 'st_philip', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div>.site-info -->



</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>