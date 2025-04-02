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
	<div id="page" class="site"
    <?php if (is_front_page()): ?>
        style="padding-top: 0.25rem; background: #f0f0f0 url('<?php echo get_template_directory_uri(); ?>/images/angel-background.webp') no-repeat fixed top / cover;"
    <?php endif; ?>
>

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'st_philip'); ?></a>

		<div class="header-nav-container">
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php
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
						<p class="site-description"><?php echo $st_philip_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

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