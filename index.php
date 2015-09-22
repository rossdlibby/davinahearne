<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>


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
	</div>
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

	<div class="row">
		<br>
		<div class="col-md-8 col-md-offset-2">
			<?php post_navigation(); ?>
		</div>
	</div>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>