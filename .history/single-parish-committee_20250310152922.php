<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package st_philip
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
if(have_posts()):
	$committee_members = get_field('committee_members');
		$committee_chair = get_field('committee_chair');

	while (have_posts()) :
		the_post(); ?>

<!-- START OF THE CONTENT-->

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>'); 	else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta">
						<?php
						st_philip_posted_on();
						st_philip_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php st_philip_post_thumbnail(); ?>

			<div class="entry-content">
					<p><?php echo wp_kses_post(get_field('purpose')); ?></p>

					<h3>Gallery</h3>
					<div class="acf-gallery">
						<?php 
						$gallery = get_field('gallery');
						$gallery = preg_replace('/<p><img(.*?)<\/p>/', '<img$1', $gallery);
						echo wp_kses_post($gallery);	?>
					</div>
					<h3>Responsibilities:</h3>
					<?php 
					$string = get_field('responsibilities');
					$responsibilities = explode("\n", $string);?>
					<ul>
					<?php
					foreach($responsibilities as $responsibility):?>
						<li>
							<?php echo $responsibility?>
						</li>
					<?php endforeach?>
					</ul>
		
					<?php if ($committee_members): ?>
						<h3>Committee Members</h3>
						<div class="committee-list">
							<?php foreach ($committee_members as $member):
		
								// Get member image (from custom field)
								$member_image = get_field('profile_photo', $member->ID);
								$member_name = get_the_title($member->ID);
		
							?>
								<div class="committee-member">
									<!-- Member Image -->
									<?php if ($member_image): ?>
										<img src="<?php echo esc_url($member_image['url']); ?>" alt="<?php echo esc_attr($member_name); ?>" width="150" height="150">
									<?php endif; ?>
		
									<!-- Member Name -->
									<h3><?php echo esc_html($member_name); ?></h3>
		
									<!-- Chair Label -->
									<?php if ($committee_chair && $committee_chair[0]->ID == $member->ID): ?>
										<p><strong>Committee Chair</strong></p>
									<?php endif; ?>
								</div>
		
							<?php endforeach; ?>
						</div>
					<?php else: ?>
						<p>No members assigned.</p>
					<?php endif; ?>
		
		<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'st_philip'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php st_philip_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->


<!-- END OF THE CONTENT -->
	<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'st_philip') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'st_philip') . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.

endif;
	?>

</main><!-- #main -->

<?php
get_footer();
