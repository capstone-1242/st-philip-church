<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st_philip
 */

?>


<section id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark" class="organization-card-link">
		<div class="organization-card">

			<div class="organization-image" style="background-image: url('<?php
																																		$featured_image_url = esc_url(get_the_post_thumbnail_url());
																																		$featured_image_placeholder_url = esc_url(get_template_directory_uri() . '/images/archive-image-placeholder.webp');
																																		echo $featured_image_url ? $featured_image_url : $featured_image_placeholder_url;
																																		?>');">

				<p class="organization-card-title">
					<?php the_title() ?>
				</p>
			</div>
			<footer class="entry-footer">
				<?php st_philip_entry_footer(); ?>
			</footer>
		</div>
	</a>
</section>