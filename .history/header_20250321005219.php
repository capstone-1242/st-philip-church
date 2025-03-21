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
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'st_philip'); ?></a>
		<header id="masthead" class="site-header">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="#E9EDF6" />
					<path d="M24 19V15C24 13.9391 23.5786 12.9217 22.8284 12.1716C22.0783 11.4214 21.0609 11 20 11C18.9391 11 17.9217 11.4214 17.1716 12.1716C16.4214 12.9217 16 13.9391 16 15V19M13 17H27L28 29H12L13 17Z" stroke="#5B5E69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				
				<span class="screen-reader-text"><?php esc_html_e('Hamburger Menu', 'st_philip'); ?></span>
			</button>

			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$st_philip_description = get_bloginfo('description', 'display');
				if ($st_philip_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $st_philip_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																			?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<span class="screen-reader-text"><?php esc_html_e('Main Navigation', 'st_philip'); ?></span>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-navigation',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<button class="woo-shop-button"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="#E9EDF6" />
					<path d="M24 19V15C24 13.9391 23.5786 12.9217 22.8284 12.1716C22.0783 11.4214 21.0609 11 20 11C18.9391 11 17.9217 11.4214 17.1716 12.1716C16.4214 12.9217 16 13.9391 16 15V19M13 17H27L28 29H12L13 17Z" stroke="#5B5E69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
			<!-- #site-navigation -->

		</header><!-- #masthead -->