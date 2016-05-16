<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : ?>

		<div class="row text-center">
			<div class="col-md-10 col-md-offset-1">
				<h2><?php _e('Search Results','html5reset'); ?></h2>

				<?php post_navigation(); ?>
			</div>
		</div>

		<div class="row">

			<div class="col-md-7 col-md-offset-1">

				<?php while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<div class="row">
							<div class="col-md-12">
								<h2><?php the_title(); ?></h2>
							</div>

							<div class="col-md-4">
								<?php if (has_post_thumbnail()) { ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

									<div class="well">
										<img src="<?php echo $image[0] ?>" />
									</div>
								<?php } ?>
							</div>
							<div class="col-md-8">
								<div class="entry">

									<?php the_excerpt(); ?>

								</div>
							</div>
						</div>

					</article>

				<?php endwhile; ?>

			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-8 col-md-offset-1">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</div>

		<div class="row text-center">
			<div class="col-md-10 col-md-offset-1">
				<?php post_navigation(); ?>
			</div>
	</div>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
