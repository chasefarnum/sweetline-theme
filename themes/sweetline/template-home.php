<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

		<?php putRevSlider("homepageSlider","homepage") ?>
		
		<?php
			get_sidebar('home-full-column');
			
			get_sidebar('home-columns');
	