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

	if (have_posts()) {
		$committee_members = get_field('committee_members');
		$committee_chair = get_field('committee_chair');

		// echo "<pre>";
		// var_dump($committee_members);
		// echo "</pre>";

		while (have_posts()) {
			the_post();
	?>
			<h2><?php the_title(); ?></h2>

			<p><?php echo wp_kses_post(get_field('purpose')); ?></p>

			<div class="acf-gallery">

				<?php echo wp_kses_post(get_field('gallery'));	?>

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
		} // end while
	} // end if

	?>

</main><!-- #main -->

<?php

get_footer();
