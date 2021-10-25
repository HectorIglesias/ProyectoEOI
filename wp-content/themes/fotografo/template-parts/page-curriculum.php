<?php
/**
 * Template Name: Curriculum List
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
<div class="site-branding desaparece">
			<div class="logo">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
			<?php 
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><a href="#"><?php echo $description; /* WPCS: xss ok. */ ?></a></p>
			<?php
			endif; ?>
			
			
		</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<?php
			query_posts(Array("post_type" =>'curriculum'));
			/*if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_title();
					the_post_thumbnail( 'thumbnail' );
				} 
			}*/
			

			while ( have_posts() ) : the_post();

				the_title();
				the_post_thumbnail( 'thumbnail' );

			endwhile; // End of the loop.
			?>

			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
