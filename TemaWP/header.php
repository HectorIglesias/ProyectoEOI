<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title></title>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
	<?php wp_head(); ?>
	</head>
<body>
		<header>
			<hgroup>
				<?php if( is_front_page() || is_home() ) :?>
				<h1 class="site-title"><?php bloginfo('name'); ?></h1>
				<?php else : ?>
				<p><?php bloginfo('name'); ?></p>
				<?php endif?>
				<h3><?php echo get_bloginfo('description', 'display'); ?></h3>			
			</hgroup>
			
			<nav>
				<?php wp_nav_menu(array(
					'theme_location' => 'top',
					'menu_id' => 'top_menu'));
				?>
				
				<nav> <?php get_search_form(); ?></nav>
			</nav>
		</header>