<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
 <aside id="sidebar">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
	
		<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

		<?php get_search_form(); ?>
		<h2><?php _e('Meta','html5reset'); ?></h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.','html5reset'); ?>"><?php _e('WordPress','html5reset'); ?></a></li>
			<?php wp_meta(); ?>
		</ul>
		
		<h2><?php _e('Subscribe','html5reset'); ?></h2>
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','html5reset'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','html5reset'); ?></a></li>
		</ul>
	
	<?php endif; ?>

	<div class="sidebar-resources">
		<h2>Resources</h2>
		<ul>
			<li><a href="start-here"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-btn-start.png" /></a></li>
			<li><a href="about"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-btn-about.png" /></a></li>
			<li><a href="free-stuff"><img src="<?php bloginfo('template_directory'); ?>/images/sidebar-btn-free.png" /></a></li>
		</ul>
	</div>

</aside>