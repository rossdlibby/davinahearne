<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<br>

							<div class="row">
								<div class="col-md-3 well">
								<?php if (has_post_thumbnail()) { ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

									<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0] ?>" /></a>
								<?php } ?>
								</div>
								<div class="col-md-9">
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" style="font-size: 1em;"><?php the_title(); ?></a></h1>
								</div>
							</div>

							<br>

							<div class="row">
								<div class="entry-content">
									<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
									
									<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>

								</div>
							</div>
							
							<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
							
						</article>

						<br>
						<br>

					</div>
				</div>
			</div>
		</div>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

<?php get_footer(); ?>