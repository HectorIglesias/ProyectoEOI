<?php
	add_theme_support('post-formats', array('aside', 'link', 'gallery'));
	add_theme_support('html5');
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
	add_theme_support('custom-header-uploads');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('starter-content');
	
	register_nav_menus(array (
			'top'=> __('Top Menu', 'twentyseventeen'),
			'social'=> __('Social Links Menu', 'twentyseventeen'),
			'footer'=>__('Footer Menu', 'twentyseventeen')
		));
	
	function shortcode_gracias(){
		return '<p>¡Gracias por leer mi blog!, si te gustó suscribete al 
		feed RSS</p>';
	}
	
	add_shortcode('gracias', 'shortcode_gracias');
?>