<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	 <!-- Header image -->
	<div class="row">
		<div class="header-container">
			<?php if (has_post_thumbnail()) { ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<img src="<?php echo $image[0] ?>" />
			<?php } ?>
		</div>
		<div class="header-opt-in container" id="headerOptIn">
			<div class="col-md-4 text-center capitalized small">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<p><strong>Get weekly goodies, inspiration + updates straight to your inbox</strong></p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<form class="form-horizontal" action="http://www.aweber.com/scripts/addlead.pl" method="post">
						<div class="col-md-3">
							<input type="text" placeholder="Enter your name" class="form-control not-rounded no-border border-bottom" />
						</div>
						<div class="col-md-3">
							<input type="email" placeholder="Enter your email" class="form-control not-rounded no-border border-bottom" />
						</div>
						<div class="col-md-1">
							<input type="submit" value="Give it to me" class="btn btn-primary" />
						</div>
						<div class="col-md-1 col-md-offset-1">
							<a href="#" class="btn btn-default no-border" id="hide_home_ad">&#x2716;</a>
						</div>
					</form>
				</div>
			</div>
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

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<br>

					<div class="row">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div>

					<br>

					<div class="row">
						<div class="entry-content">
							
							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
							
							<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>

						</div>
					</div>
					
					<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
					
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
		</div>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

<?php get_footer(); ?>