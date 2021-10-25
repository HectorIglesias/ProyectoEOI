<?php get_header();

	query_posts(Array("posts_per_page"=>2, "post_type" =>'plantas'));
?>	
<?php if(have_posts()){
		while(have_posts()){
			the_post();?>
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
			<?php echo get_post_custom($post_id)['nombreCientifico'][0];
			
			}}?>
	
<?php get_footer();?>