<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="col-md-6 col-md-offset-2">

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<br>

					<div class="row">
						<h1 class="entry-title posts-page"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					</div>

					<br>

					<br>

					<div class="row text-right">
						<h5><span class="well"><?php posted_on(); ?></span></h5>
					</div>

					<br>

					<br>

					<div class="row">

						<a href="<?php the_permalink() ?>" class="individual-post-link">
							<span class="individual-post">

								<?php if (has_post_thumbnail()) { ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

								<div class="partial-img">
									<img src="<?php echo $image[0] ?>" />
								</div>
								<?php } ?>

								<div class="posts-excerpt">
									<?php echo wp_trim_words(get_the_content(), 50); ?>
								</div>
							</span>
						</a>

					</div>

				</article>

			</div>
		</div>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>