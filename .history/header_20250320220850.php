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
					<span class="screen-reader-text"><?php esc_html_e('Main Navigation', 'st_philip'); ?></span>
					<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="20" cy="20" r="20" fill="#E9EDF6"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.6 14C11.6 13.6818 11.7264 13.3765 11.9515 13.1515C12.1765 12.9265 12.4817 12.8 12.8 12.8H27.2C27.5183 12.8 27.8235 12.9265 28.0485 13.1515C28.2736 13.3765 28.4 13.6818 28.4 14C28.4 14.3183 28.2736 14.6235 28.0485 14.8486C27.8235 15.0736 27.5183 15.2 27.2 15.2H12.8C12.4817 15.2 12.1765 15.0736 11.9515 14.8486C11.7264 14.6235 11.6 14.3183 11.6 14ZM11.6 20C11.6 19.6818 11.7264 19.3765 11.9515 19.1515C12.1765 18.9265 12.4817 18.8 12.8 18.8H27.2C27.5183 18.8 27.8235 18.9265 28.0485 19.1515C28.2736 19.3765 28.4 19.6818 28.4 20C28.4 20.3183 28.2736 20.6235 28.0485 20.8486C27.8235 21.0736 27.5183 21.2 27.2 21.2H12.8C12.4817 21.2 12.1765 21.0736 11.9515 20.8486C11.7264 20.6235 11.6 20.3183 11.6 20ZM11.6 26C11.6 25.6818 11.7264 25.3765 11.9515 25.1515C12.1765 24.9265 12.4817 24.8 12.8 24.8H27.2C27.5183 24.8 27.8235 24.9265 28.0485 25.1515C28.2736 25.3765 28.4 25.6818 28.4 26C28.4 26.3183 28.2736 26.6235 28.0485 26.8486C27.8235 27.0736 27.5183 27.2 27.2 27.2H12.8C12.4817 27.2 12.1765 27.0736 11.9515 26.8486C11.7264 26.6235 11.6 26.3183 11.6 26Z" fill="#5B5E69"/>
</svg>

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
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-navigation',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<button><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="20" cy="20" r="20" fill="#E9EDF6"/>
<path d="M24 19V15C24 13.9391 23.5786 12.9217 22.8284 12.1716C22.0783 11.4214 21.0609 11 20 11C18.9391 11 17.9217 11.4214 17.1716 12.1716C16.4214 12.9217 16 13.9391 16 15V19M13 17H27L28 29H12L13 17Z" stroke="#5B5E69" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
			<!-- #site-navigation -->

		</header><!-- #masthead -->