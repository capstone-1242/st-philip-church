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

	<div class="site-info">
		<a href="<?php echo get_home_url(); ?>" class="navbar-brand text-end front-page-anchor">
			<?php if (has_custom_logo()) : ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.webp" alt="Site Logo" class="site-logo-img" />
			<?php endif; ?>

		</a>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'st_philip')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'st_philip'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'st_philip'), 'st_philip', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>