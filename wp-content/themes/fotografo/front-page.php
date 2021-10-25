<?php get_header();

	query_posts(Array("post_id"=>78, "post_type" =>'curriculum'));
?>
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
			<?php the_post();?>
            <div id="contactoFoto">
       			<div id="contacto">
                	<h2><?php the_title(); ?></h2>
                	<ul>
                    	<li><?php echo get_post_custom($post_id)['direccion'][0];?></li>
                        <li><?php echo get_post_custom($post_id)['email'][0];?></li>
						<li><?php echo get_post_custom($post_id)['telefonoFijo'][0];?></li>
						<li><?php echo get_post_custom($post_id)['telefonoMovil'][0];?></li>
                    </ul>
                </div>
            	<div id="foto">
                	<?php the_post_thumbnail( 'thumbnail' );?>
                </div>
       		</div>
            <div id="estudios">
            	<ul>
            		<li><?php echo nl2br(get_post_custom($post_id)['estudios'][0]);?></li>
                </ul>
            </div>
            <div id="experiencia">
            	<ul>
            		<li><?php echo nl2br(get_post_custom($post_id)['experiencia'][0]);?></li>
                </ul>
            </div>
            <div id="cualidades">
            	<div id="programacion">
                	Lenguajes de programación
					<ul>
                    	<?php
							$lenguajes = get_field('lenguajesProgramacion', $post_id);					
							?>
								<?php 
								if($lenguajes):
									foreach( $lenguajes as $lenguaje ): ?>
										<li><?php echo $lenguaje;?></li>
								<?php endforeach;
								endif;?>						
                    </ul>
                </div>
                <div id="disenioGrafico">
                	Diseño gráfico
                	<ul>        	
                    	<?php
							$opciones = get_field('disenioGrafico', $post_id);
							if($opciones):
								foreach( $opciones as $opcion ): ?>
									<li><?php  echo $opcion;?></li>
							<?php endforeach; 
							endif;?>
                    </ul>
				</div>
            	<div id="baseDatos">
                	Lenguajes de bases de datos
					<ul>        	
                    	<?php
							$lenguajesBd = get_field('lenguajesBD', $post_id);
							if($lenguajesBd):
								foreach( $lenguajesBd as $lenguaje ): ?>
									<li><?php echo $lenguaje;?></li>
							<?php endforeach; 
							endif;?>
                    </ul>
                </div>
                <div id="cms">
                	Gestores de contenidos o CMS
					<ul>        	
                    	<?php
							$opciones = get_field('cms', $post_id);
							if($opciones):
							foreach( $opciones as $opcion ): ?>
								<li><?php echo $opcion;?></li>
							<?php endforeach; 
							endif;?>
                    </ul>
				</div>
            </div>
            	
		</main><!-- #main -->
	</article><!-- #primary -->
</section>
	
<?php get_footer();?>