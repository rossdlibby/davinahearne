<?php
/**
 * Template Name: Home
 */
include(TEMPLATEPATH.'/home_header.php'); ?>

<!-- Header image -->
<div class="row">
	<div class="header-container" id="headerContainer">
		<div class="col-md-6 no-padding-left text-left pull-right">
			<img src="<?php bloginfo('template_directory') ?>/images/davina-header-img-right.jpg" alt="Be Happy, Be Wild, Be Free | Davina Hearne" />
		</div>
		<div class="col-md-6 no-padding-right text-right pull-right">
			<img src="<?php bloginfo('template_directory') ?>/images/davina-header-img-left.jpg" alt="Be Happy, Be Wild, Be Free | Davina Hearne" />
		</div>
	</div>
</div>

<div class="row">
	<?php include (TEMPLATEPATH . '/home-opt-in.php'); ?>
</div>

<!-- Display the giant nav buttons -->
<div class="home-buttons row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>