<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<!-- Header image -->
<div class="row">
	<div class="header-container">
		<img src="<?php bloginfo('template_directory') ?>/images/davina-header-img.jpg" alt="Be Happy, Be Wild, Be Free | Davina Hearne" />
	</div>
</div>
<!-- Home page ad -->
<div class="home-ad row well not-rounded" id="home_ad">
	<br>
	<div class="col-md-4 text-center capitalized small">
		<div class="col-md-10 col-md-offset-2">
			<p><strong>Get weekly goodies, inspiration + updates straight to your inbox</strong></p>
		</div>
	</div>
	<div class="col-md-8">
		<form class="form-horizontal">
			<div class="col-md-4">
				<input type="text" placeholder="Enter your name" class="form-control not-rounded no-border border-bottom" />
			</div>
			<div class="col-md-4">
				<input type="email" placeholder="Enter your email" class="form-control not-rounded no-border border-bottom" />
			</div>
			<div class="col-md-2">
				<input type="submit" value="Give it to me" class="btn btn-primary" />
			</div>
			<div class="col-md-1 col-md-offset-1">
				<a href="#" class="btn btn-default no-border" id="hide_home_ad">&#x2716;</a>
			</div>
		</form>
	</div>
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