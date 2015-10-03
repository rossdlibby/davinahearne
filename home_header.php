<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>

	<!-- Bootstrap files -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootflat.css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

	<!-- Oswald font -->
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

	<!-- Application-specific meta tags -->
	<?php
		// Windows 8
		if (true == of_get_option('meta_app_win_name')) {
			echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		}

		// Twitter
		if (true == of_get_option('meta_app_twt_card')) {
			echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		}

		// Facebook
		if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		}
	?>

	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Futura font -->
	<script src="//use.typekit.net/mhb2rkz.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Facebook SDK -->
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId		: '907243382695391',
			xfbml		: true,
			version		: 'v2.4'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

	<!-- Nav -->
	<nav class="navbar navbar-inverse navbar-fixed-top text-right" role="navigation">
		<div class="container-fluid">
			<!-- Search box -->
			<div class="row" id="topSearch">
				<div class="col-md-10 col-md-offset-1">
					<?php get_search_form(); ?>
					<br>
				</div>
			</div>

			<div class="col-md-10 col-md-offset-1">

				<div class="navbar-header">

					<!-- Responsive button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" id="navbtn">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Logo -->
					<a href="<?php echo home_url( '/' ); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/davinahearne-logo.png" alt="Davina Hearne" width="200" /></a>
				</div>

				<!-- Menu items -->
				<div class="navbar-collapse collapse" id="navigation">
					<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav tk-futura-pt main-menu">%3$s</ul>') ); ?>

					<!-- Highlighted item -->
					<div class="navbar-text no-margin navbar-right">
						<p class="promo-text tk-futura-pt capitalized"><a href="<?php echo home_url( '/free-stuff' ); ?>" class="text-white free-stuff"><?php bloginfo('description'); ?></a></p>

						<div class="sb-search">
							<button id="doSearch" class="sb-button">
								<span><i class="fa fa-search"></i></span>
							</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<div class="nav-spacer"></div>

	<!-- Content container -->
	<div class="container-fluid" id="mainContent">

		<!-- Opt-in -->
		<div class="row not-mobile">
			<?php include (TEMPLATEPATH . '/header-opt-in.php'); ?>
		</div>