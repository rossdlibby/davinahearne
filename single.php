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
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div>

					<br>

					<div class="row">

						<?php if (has_post_thumbnail()) { ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<div class="well">
							<img src="<?php echo $image[0] ?>" />
						</div>
						<?php } ?>
					</div>

					<div class="row">
						<div class="entry-content">
							
							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
							
							<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>

						</div>
					</div>
					
					<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

				<div class="post-divider">
				</div>
					
				</article>

				<br>
				<br>

				<div class="row">
					<a href="#" class="pink" id="leaveComment">Leave a comment :)</a>

					<br>
					
					<div id="commentForm">
						<?php comments_template(); ?>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<div class="row">
					<div class="col-md-8 col-md-offset-1">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

<?php get_footer(); ?>