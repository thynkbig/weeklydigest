<?php get_header(); ?>
	<div id="homepage">
	<div id="content">
	
	<div class="login">
		<a href="<?php echo bloginfo('url') . "/wp-admin"; ?>"><p><b>Log In</b></p></a>
	</div>
	<br/><br/><br/>
	<?php homepage_list(); ?>
	
	</div>
	</div>
<?php get_footer(); ?>