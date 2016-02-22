<!DOCTYPE html>
<html <?php language_Attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.bare.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.dark.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.dark.min.css" type="text/css">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-2.2.0.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type = "text/javascript"></script>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="site-header">
			<!-- <nav>
				<?php
				$args = array('theme_location' => 'primary');
				wp_nav_menu($args); ?>
			</nav> -->
			<nav id="standard_nav">
				<li class="home_tab"><a href="/mysite">Home</a></li>
				<li class="work_tab"><a href="work.html">Portfolio</a></li>
				<li class="hobbies_tab"><a href="hobbies.html">Hobbies</a></li>
				<li class="about_tab"><a href="about.html">About</a></li>
			</nav>

			<nav id="mobile_nav">
				<li class="home_tab"><a href="index.html">Home</a></li>
				<li><a id="simple-menu" href="#sidr-right"><img class="hamburger" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-wh.png" alt="hamburger" /></a></li>
			</nav>

			<div id="sidr-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="work.html">Portfolio</a></li>
					<li><a href="hobbies.html">Hobbies</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</div>
		</header>




