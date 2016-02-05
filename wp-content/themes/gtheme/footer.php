<footer class="site-footer">
	<nav>
		<?php
		$args = array('theme_location' => 'footer');
		wp_nav_menu($args); ?>
	</nav>

	<p class="copyright"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

		<?php wp_footer(); ?>
	</body>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type = "text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-1.11.3.js" type=""></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/script.js" type="text/javascript"></script>
</html>