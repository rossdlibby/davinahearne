<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>


	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<div class="row">
								<div class="col-md-12">
									<h1 class="entry-title posts-page"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
								</div>
							</div>

							<br>

							<div class="row">

								<div class="col-md-6">

									<a href="<?php the_permalink() ?>" class="individual-post-link">
										<span class="individual-post">

											<?php if (has_post_thumbnail()) { ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

											<div class="partial-img">
												<img src="<?php echo $image[0] ?>" />
											</div>
											<?php } ?>
										</span>
									</a>
								</div>

								<div class="col-md-6">
									<div class="posts-excerpt">
										<?php echo wp_trim_words(get_the_content(), 50); ?>
									</div>

								</div>

								<div class="text-right post-date">
									<h5><a href="<?php the_permalink() ?>">Read more</a></h5>
								</div>

							</div>

						</article>

						<br>

						<br>

						<br>

						<br>

						<div class="post-divider"></div>

			<?php endwhile; ?>
		</div>
	</div>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>