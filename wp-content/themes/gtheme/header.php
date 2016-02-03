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
			<!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h3><?php bloginfo('description'); ?></h3> -->
			<nav>
				<li class="home_tab"><a href="index.html">Home</a></li>
				<li class="people_tab"><a href="people.html">People</a></li>
				<li class="work_tab"><a href="work.html">Work</a></li>
				<li class="interests_tab"><a href="interests.html">Interests</a></li>
				<li class="about_tab"><a href="about.html">About Me</a></li>
			</nav>
		</header>
