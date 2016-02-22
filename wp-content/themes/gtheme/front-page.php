<?php
get_header(); ?>

<div class="page-wrap">
	<div class="index pages">
		<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.png" alt="profile pic" />

		<div class="smash_slide">
			<a href="hobbies.html#smash"><img class="smash_icon hvr-wobble-horizontal" src="<?php echo get_template_directory_uri(); ?>/images/smashball.png" alt="smash" />
			<div class="smash_target">
				<img class="left_arrow" src="<?php echo get_template_directory_uri(); ?>/images/left_arrow.jpg" alt="" />
				<img class="left_red_arrow" src="<?php echo get_template_directory_uri(); ?>/images/left_red_arrow.png" alt="" />
			</div></a>
		</div>
		<div class="skate_slide">
			<a href="hobbies.html#skate"><img class="skate_icon hvr-wobble-horizontal" src="<?php echo get_template_directory_uri(); ?>/images/skatewheel.png" alt="skateboarding" />
			<div class="skate_target">
				<img class="right_arrow" src="<?php echo get_template_directory_uri(); ?>/images/right_arrow.jpg" alt="" />
				<img class="right_red_arrow" src="<?php echo get_template_directory_uri(); ?>/images/right_red_arrow.png" alt="" />
			</div></a>
		</div>
	</div>
</div>

<?php get_footer();
?>