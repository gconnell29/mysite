<!DOCTYPE html>
<html <?php language_Attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="site-header">
			<nav>
				<?php
				$args = array('theme_location' => 'primary');
				wp_nav_menu($args); ?>
			</nav>
		</header>
