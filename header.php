<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st_philip
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (is_front_page() || is_page('livestream')) : ?>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v22.0"></script>
	<?php endif; ?>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'st_philip'); ?></a>

		<div class="header-nav-container">
			<header id="masthead" class="site-header">
				<button class="menu-toggle" aria-label="Open Menu" aria-expanded="false" aria-controls="site-navigation"><i class="fa-solid fa-bars"></i></button>
				<div class="site-branding">
					<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$st_philip_description = get_bloginfo('description', 'display');
					if ($st_philip_description || is_customize_preview()) :
					?>
						<p class="site-description screen-reader-text"><?php echo $st_philip_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																														?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->


				<?php if (is_active_sidebar('shopping-cart-icon')) : ?>
					<aside id="cart-icon-section" class="widget-area shopping-cart">
						<?php dynamic_sidebar('shopping-cart-icon'); ?>
					</aside><!-- #cart-icon -->
				<?php endif; ?>


				<nav id="site-navigation" class="main-navigation" aria-label="Main site navigation">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-navigation',
							'menu_id'        => 'primary-menu',
							'walker'         => new St_Philip_Walker_Nav_Menu(),
						)
					);
					?>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>