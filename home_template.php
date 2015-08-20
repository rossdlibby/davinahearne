<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<!-- Display the giant nav buttons -->
<div class="home-buttons row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>