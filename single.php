<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="header-opt-in single container" id="headerOptIn">
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

					<br>
					<br>
					
					<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

					<div class="row next-prev">
						<div class="col-md-2 lt">
							<br>
							<br>
							<p><?php previous_post('%', '<i class="fa fa-angle-left"></i> <span>Previous</span>', 'no'); ?></p>
						</div>
						<div class="col-md-8 text-center">
							<p class="capitalized text-black"><strong>Share this story</strong></p>
							<br>
							<p>
								<a href="#" class="share share-fb"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share share-tw"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share share-gp"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share share-en"><i class="fa fa-envelope"></i></a>
							</p>
						</div>
						<div class="col-md-2 rt text-right">
							<br>
							<br>
							<p><?php next_post('%', '<span>Next</span> <i class="fa fa-angle-right"></i>', 'no'); ?></p>
						</div>
					</div>

					<br>
					<br>
					<br>
					<br>

					<div class="post-divider"></div>

					<!-- Opt-in form -->
					<div class="row">
						<form class="form-horizontal post-opt-in">
							<div class="col-md-5 text-center capitalized small">
								<div class="col-md-12">
									<p class="larger"><strong>Hungry for more?</strong></p>
									<p><strong>Sign up for my weekly updates... It's free</strong></p>
								</div>
							</div>
							<div class="col-md-4">
								<input type="email" placeholder="Enter your email" class="form-control not-rounded email" />
							</div>
							<div class="col-md-3">
								<input type="submit" value="Hook me up!" class="form-control not-rounded opt-in-btn" />
							</div>
						</form>
					</div>
					<div class="post-divider"></div>
					
				</article>

				<br>
				<br>

				<div class="row">
					<div class="col-md-12">
						<a href="#" class="pink" id="leaveComment">Leave a comment :)</a>
					</div>
				</div>

				<div class="row">
					
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