<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
?>
	<!-- Display random testimonials -->
	<div class="col-md-6 col-md-offset-3 text-center">
		<h2>What people are saying</h2>
		<?php
			if (function_exists('testimonial_rotator')) {
				echo testimonial_rotator(array('id' => 7371));
			}
		?>
	</div>

	<!-- End content container -->
	</div>

	<!-- Follow bar -->
	<div class="follow-bar" id="follow-bar">
		<span class="share-title">Share this page:</span>
		<?php naked_social_share_buttons(); ?>
		<span class="close-share"><button id="closeFollowBar"><i class="fa fa-times"></i></button></span>
	</div>

	<footer id="footer" class="source-org vcard copyright" role="contentinfo">
		<div class="row footer-container">
			<div class="col-md-6 no-padding-right text-right col-sm-12">
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-lt.jpg" />
			</div>
			<div class="col-md-6 no-padding-left text-left col-sm-12">
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-rt-1.jpg" />
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-rt-2.jpg" />

				<!-- Footer opt-in -->
				<div class="footer-opt-in">
					<form class="form-horizontal" action="http://www.aweber.com/scripts/addlead.pl" method="post">
						<!-- Aweber -->
						<input type="hidden" name="meta_web_form_id" value="526188367" />
						<input type="hidden" name="meta_split_id" value="" />
						<input type="hidden" name="listname" value="awlist3538324" />
						<input type="hidden" name="redirect" value="http://davinahearne.com/awesome" id="redirect_1694d65df79b1c129ce1cbb9373015af" />
						<input type="hidden" name="meta_redirect_onlist" value="http://davinahearne.com/already-subscribed" />
						<input type="hidden" name="meta_adtracking" value="Davina_Hearne_-_footer" />
						<input type="hidden" name="meta_message" value="1" />
						<input type="hidden" name="meta_required" value="name,email" />

						<div class="row">
							<div class="col-md-4 col-md-offset-2">
								<input type="text" class="form-control footer-opt-in-text" name="name" placeholder="Enter your name" />
							</div>
							<div class="col-md-4">
								<input type="email" class="form-control footer-opt-in-text" name="email" placeholder="Enter your email" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<input type="submit" class="form-control footer-opt-in-button" value="Give it to me" />
							</div>
						</div>
						<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=rExsjBwczGzs" alt="" /></div>
					</form>
				</div>
			</div>
		</div>

		<br>
		<p><?php wp_nav_menu( array('theme_location' => 'footer', 'items_wrap' => '<ul id="%1$s" class="%2$s brandon-grotesque footer-menu">%3$s</ul>') ); ?></p>
		<br>
		<p>&copy;&nbsp;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
	</footer>

	<?php wp_footer(); ?>


	<!-- jQuery is called via the WordPress-friendly way via functions.php -->

	<!-- Scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- this is where we put our custom functions -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<!-- Asynchronous google analytics; this is the official snippet.
	Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-XXXXXX-XX', 'domainname.com');
	ga('send', 'pageview');

	</script>
	-->

</body>

</html>