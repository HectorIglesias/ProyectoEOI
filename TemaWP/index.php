<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Xperia de SONY</title>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
	<?php wp_head(); ?>
	</head>
	<?php get_header();?>
	
		
		<article>
			<img src="mat/banner_xperia_z.jpg">
			<header>	
				<h1>Xperia M, nuevo modelo de Sony de smartphone de calidad</h1>
			</header>
			<?php query_posts(Array("posts_per_page"=>2)); ?>
			<section>
			<?php if (have_posts()){
					while(have_posts()){
						the_post();?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_excerpt(); ?></p>
					<p><?php the_author(); ?></p>
					<p><?php echo get_the_date(); ?></p>
					<p><?php the_category(); ?></p>
					<p><?php the_tags(); ?></p>
					<p><?php the_post_thumbnail();?></p>
					<?php the_content();}
				}?>
						
			</section>
			
			<footer>
				<ul>
					<li><a href="#">				
							<p>Xperia Z1<br> Lo mejor de Sony. Lo mejor de ti.</p>
							<img src="mat/iamgen_xperia_z1_pequena.jpg">					
						</a>
					</li>
					<li>
						<a href="#">						
							<p class="azul">Xperia M<br> Siente un toque de magia.</p>
							<img src="mat/iamgen_xperia_m_pequena.jpg">
						</a>
					</li>
					<li>					
						<a href="#">
							<p class="naranja">Xperia MZW1<br>Lo mejor de Sony. Lo mejor de ti. Lo mejor de todos.</p>
							<img src="mat/iamgen_xperia_z1_pequena.jpg">	
						</a>
				  </li>
				</ul>				
			</footer>	
		</article>
		
		<?php echo get_sidebar(); ?>
		
		<?php echo get_footer(); ?>
	</body>
</html>
