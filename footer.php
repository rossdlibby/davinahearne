<?php
/**
* @package WordPress
* @subpackage HTML5-Reset-WordPress-Theme
* @since HTML5 Reset 2.0
*/
?>

	<!-- End content container -->
	</div>

	<!-- Follow bar -->
	<div class="follow-bar" id="follow-bar">
		Share this page:
		<a href="#"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</a>
		<a href="#"><i class="fa fa-twitter"></i>&nbsp;&nbsp;Twitter</a>
		<a href="#"><i class="fa fa-google-plus"></i>&nbsp;&nbsp;Google+</a>
		<a href="#"><i class="fa fa-pinterest"></i>&nbsp;&nbsp;Pinterest</a>
		<span class="close-share"><button id="closeFollowBar"><i class="fa fa-times"></i></button></span>
	</div>

	<footer id="footer" class="source-org vcard copyright" role="contentinfo">
		<div class="row footer-container">
			<div class="col-md-6 no-padding-right text-right">
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-lt.jpg" />
			</div>
			<div class="col-md-6 no-padding-left text-left">
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-rt-1.jpg" />
				<img src="<?php bloginfo('template_directory') ?>/images/footer-bg-rt-2.jpg" />

				<!-- Footer opt-in -->
				<div class="footer-opt-in">
					<form class="form-horizontal" action="http://www.aweber.com/scripts/addlead.pl" method="post">
						<div class="row">
							<div class="col-md-4 col-md-offset-2">
								<input type="text" class="form-control footer-opt-in-text" placeholder="Enter your name" />
							</div>
							<div class="col-md-4">
								<input type="email" class="form-control footer-opt-in-text" placeholder="Enter your email" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<input type="submit" class="form-control footer-opt-in-button" value="Give it to me" />
							</div>
						</div>
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
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

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