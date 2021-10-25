<?php
/**
 * Template Name: Curriculum List_2
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fotografo
 */

get_header(); ?>
<section>
	<header class="site-branding desaparece">
			<div class="logo">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			<?php 
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><a href="#"><?php echo $description; /* WPCS: xss ok. */ ?></a></p>
			<?php
			endif; ?>	
		</header>
	<article id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>
			<?php query_posts(Array("post_type" =>'curriculum'));
			/*if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_title();
					the_post_thumbnail( 'thumbnail' );
				} 
			}*/
			while ( have_posts() ) : the_post();?>
			<div class="listaCurriculum">
				<?php the_post_thumbnail( 'thumbnail' );?>
				<a href="<?php the_permalink(); ?>" ><?php the_title();?></a>
			</div>
			<?php endwhile; // End of the loop.?>
		</main><!-- #main -->
	</article><!-- #primary -->
</section>
<?php
get_footer();
