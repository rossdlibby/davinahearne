<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php _e('This post is password protected. Enter the password to view comments.','html5reset'); ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>

	<div class="col-md-12">
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>

		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p><?php _e('Comments are closed.','html5reset'); ?></p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<div class="col-md-8 col-md-offset-1">

		<div class="cancel-comment-reply">
			<br>
			Leave a Reply <?php cancel_comment_reply_link(); ?>
		</div>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p><?php _e('You must be','html5reset'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in','html5reset'); ?></a> <?php _e('to post a comment.','html5reset'); ?></p>
		<?php else : ?>

		<div class="row commentlist main">

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">

				<?php if ( is_user_logged_in() ) : ?>

					<p><?php _e('Logged in as','html5reset'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Log out','html5reset'); ?> &raquo;</a></p>

				<?php else : ?>
					<div class="form-group">
							<label for="author" class="col-md-2 no-padding-right no-padding-left control-label text-left"><?php _e('Name','html5reset'); ?></label>
							<div class="col-md-10 no-padding-left">
								<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> class="form-control" />
							</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-md-2 no-padding-right no-padding-left control-label text-left"><?php _e('Email','html5reset'); ?></label>
						<div class="col-md-10 no-padding-left">
							<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label for="url" class="col-md-2 no-padding-right no-padding-left control-label text-left"><?php _e('Website','html5reset'); ?></label>
						<div class="col-md-10 no-padding-left">
							<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" class="form-control" />
						</div>
					</div>

				<?php endif; ?>

				<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

				<div class="form-group">
					<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" class="col-md-12 form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="col-md-3">
						<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit','html5reset'); ?>" class="btn btn-primary" />
					</div>
					<?php comment_id_fields(); ?>
				</div>
				
				<?php do_action('comment_form', $post->ID); ?>

			</form>
		</div>
	</div>
	<div class="col-md-3"></div>

	<?php endif; // If registration required and not logged in ?>
	
</div>
<?php endif; ?>
