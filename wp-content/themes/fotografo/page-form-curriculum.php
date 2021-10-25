<?php
/**
 * Template Name: Plantilla Formulario
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

get_header('form'); ?>

<?php
	if($_POST['nombre']){
		$nombre= $_POST['nombre'];		
		$direccion= $_POST['direccion'];
		$telefonoFijo= $_POST['telefonoFijo'];
		$telefonoMovil= $_POST['telefonoMovil'];
		$email= $_POST['email'];
		$estudios= $_POST['estudios'];
		$experiencia= $_POST['experiencia'];
		
		if($_POST['lenguajesProgramacion']= 'formLengProgramacion'){
			$lenguajesProgramacion= $_POST['ocultoLengProg'];
		}
		if($_POST['disenioGrafico']= 'formDisenioGrafico'){
			$disenioGrafico= $_POST['ocultoDisGraf'];
		}
		if($_POST['lenguajesBD']= 'formLenguajesBD'){
			$lenguajesBD= $_POST['ocultoLengBD'];
		}
		if($_POST['cms']= 'cms'){
			$cms= $_POST['ocultCMS'];
		}
		
		//CONECTAMOS CON LA BASE DE DATOS E INSERTAMOS LOS DATOS
		global $wpdb;
		$servidor= 'localhost';
		$usuario= 'mypro8436';
		$password= 'AEXtzMHC';
		$conectar= mysql_connect($servidor, $usuario, $password) or die ("No se ha podido conectar con la base de datos");
		mysql_select_db("hectoriglesias", $conectar);
		
		$usuario_actualObjeto= wp_get_current_user();
		$usuario_actual= $usuario_actualObjeto->user_login;
		$fecha_actual= current_time('mysql');
		$fecha_actual_GMT= current_time('mysql', 1);
		$titulo_post= ucwords($nombre);
		$nombre_post= str_replace(" ", "-", $nombre);
		$direccion_post= "http://www.proyectohector.cf.mialias.net/?post_type=curriculum&#038;p=";
		
		$wpdb->insert('BD_posts', array('post_author'=>$usuario_actual, 'post_date'=>$fecha_actual, 'post_date_gmt'=>$fecha_actual_GMT, 'post_content'=>'', 'post_title'=>$titulo_post, 
						'post_excerpt'=>'', 'post_status'=>'publish', 'comment_status'=>'open', 'ping_status'=>'closed', 'post_password'=>'', 'post_name'=>$nombre_post, 'to_ping'=>'', 
						'pinged'=>'', 'post_modified'=>$fecha_actual, 'post_modified_gmt'=>$fecha_actual_GMT, 'post_content_filtered'=>'', 'post_parent'=>0, 'guid'=>'', 
						'menu_order'=>0, 'post_type'=>'curriculum', 'post_mime_type'=>'', 'comment_count'=>0));						
						
		/*$insercion_post= "INSERT INTO 'BD_posts' ('post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 
						'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 
						'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 
						'menu_order', 'post_type', 'post_mime_type', 'comment_count') VALUES ($usuario_actual, '$fecha_actual', '$fecha_actual_GMT', '', '$titulo_post',
						'', 'publish', 'open', 'closed', '$nombre_post', '', '', '$fecha_actual', '$fecha_actual_GMT', '', 0, '', '', 0, 'curriculum', '', 0)";*/
		//echo "$insercion_post<br>";
		//mysql_query($insercion_post, $conectar);
		$post_id= $wpdb->insert_id;

		$insercion_meta[0]= array('post_id'=>$post_id, 'meta_key'=>'nombre', 'meta_value'=>$nombre);
		$insercion_meta[1]= array('post_id'=>$post_id, 'meta_key'=>'_nombre', 'meta_value'=>'field_5a33b5d6abdf4');
		$insercion_meta[2]= array('post_id'=>$post_id, 'meta_key'=>'direccion', 'meta_value'=>$direccion);
		$insercion_meta[3]= array('post_id'=>$post_id, 'meta_key'=>'_direccion', 'meta_value'=>'field_5a38e0049b5a4');
		$insercion_meta[4]= array('post_id'=>$post_id, 'meta_key'=>'telefonoFijo', 'meta_value'=>$telefonoFijo);
		$insercion_meta[5]= array('post_id'=>$post_id, 'meta_key'=>'_telefonoFijo', 'meta_value'=>'field_5a38e0879b5a5');
		$insercion_meta[6]= array('post_id'=>$post_id, 'meta_key'=>'telefonoMovil', 'meta_value'=>$telefonoMovil);
		$insercion_meta[7]= array('post_id'=>$post_id, 'meta_key'=>'_telefonoMovil', 'meta_value'=>'field_5a38e1509b5a6');
		
		if($_POST['lenguajesProgramacion']= 'formLengProgramacion'){
			
			$tamanioArray= sizeof($lenguajesProgramacion);
			$expresion_regular="a:$tamanioArray:{";
			
			for($i=0; $i<$tamanioArray; $i++){
			if($lenguajesProgramacion[$i]== 'java'){
				$expresion_regular .= "i:$i;s:4:'Java';";	
			}
			if($lenguajesProgramacion[$i]== 'php'){
				$expresion_regular .= "i:$i;s:3:'PHP';";	
			}
			if($lenguajesProgramacion[$i]== 'phyton'){
				$expresion_regular .= "i:$i;s:6:'Phyton';";	
			}
			if($lenguajesProgramacion[$i]== 'cAlmohadilla'){
				$expresion_regular .= "i:$i;s:2:'C#';";	
			}
			if($lenguajesProgramacion[$i]== 'cMasMas'){
				$expresion_regular .= "i:$i;s:3:'C++';";	
			}
			if($lenguajesProgramacion[$i]== 'c'){
				$expresion_regular .= "i:$i;s:1:'C';";	
			}
			if($lenguajesProgramacion[$i]== 'javascript'){
				$expresion_regular .= "i:$i;s:10:'JavaScript';";	
			}
			if($lenguajesProgramacion[$i]== 'perl'){
				$expresion_regular .= "i:$i;s:4:'Perl';";	
			}
			$expresion_regular .="}";			
		}
		$insercion_meta[8]= array('post_id'=>$post_id, 'meta_key'=>'lenguajesProgramacion', 'meta_value'=>$expresion_regular);
		
		$insercion_meta[9]= array('post_id'=>$post_id, 'meta_key'=>'_lenguajesProgramacion', 'meta_value'=>'field_5a38e6aa9b5ab');
		}
		
		if($_POST['disenioGrafico']= 'formDisenioGrafico'){
			
			$tamanioArray= sizeof($disenioGrafico);
			$expresion_regular="a:$tamanioArray:{";
			
			for($i=0;$i<$tamanioArray;$i++){
			if($disenioGrafico[$i]== 'html'){
				$expresion_regular .= "i:$i;s:4:'HTML';";	
			}
			if($disenioGrafico[$i]== 'css'){
				$expresion_regular .= "i:$i;s:3:'CSS';";	
			}
			if($disenioGrafico[$i]== 'photoshop'){
				$expresion_regular .= "i:$i;s:9:'Photoshop';";	
			}
			if($disenioGrafico[$i]== 'illustrator'){
				$expresion_regular .= "i:$i;s:11:'Illustrator';";	
			}
			if($disenioGrafico[$i]== 'coreldraw'){
				$expresion_regular .= "i:$i;s:9:'CorelDRAW';";	
			}
			if($disenioGrafico[$i]== 'indesign'){
				$expresion_regular .= "i:$i;s:8:'InDesign';";	
			}
			if($disenioGrafico[$i]== 'gimp'){
				$expresion_regular .= "i:$i;s:4:'Gimp';";	
			}
			$expresion_regular .="}";			  
		}
		$insercion_meta[10]= array('post_id'=>$post_id, 'meta_key'=>'disenioGrafico', 'meta_value'=>$expresion_regular);
		
		$insercion_meta[11]= array('post_id'=>$post_id, 'meta_key'=>'disenioGrafico', 'meta_value'=>'field_5a38e781c443a');
		}
		
		if($_POST['lenguajesBD']= 'formLenguajesBD'){
			
			$tamanioArray= sizeof($lenguajesBD);
			$expresion_regular="a:$tamanioArray:{";
			
			for($i=0;$i<$tamanioArray;$i++){	
			if($lenguajesBD[$i]== 'oracle'){
				$expresion_regular .= "i:$i;s:6:'Oracle';";	
			}
			if($lenguajesBD[$i]== 'mysql'){
				$expresion_regular .= "i:$i;s:13:'MySQL/MariaDB';";	
			}
			if($lenguajesBD[$i]== 'microsoftSQLServer'){
				$expresion_regular .= "i:$i;s:20:'Microsoft SQL Server';";	
			}
			if($lenguajesBD[$i]== 'postgreSQL'){
				$expresion_regular .= "i:$i;s:10:'PostgreSQL';";	
			}
			if($lenguajesBD[$i]== 'mongoDB'){
				$expresion_regular .= "i:$i;s:9:'MongoDB';";	
			}
			if($lenguajesBD[$i]== 'aws'){
				$expresion_regular .= "i:$i;s:3:'AWS';";	
			}
			$expresion_regular .="}";
		}
		$insercion_meta[12]= array('post_id'=>$post_id, 'meta_key'=>'lenguajesBD', 'meta_value'=>$expresion_regular);
	
		$insercion_meta[13]= array('post_id'=>$post_id, 'meta_key'=>'_lenguajesBD', 'meta_value'=>'field_5a38e2509b5a9');
		}
		
		if($_POST['cms']= 'cms'){
			$tamanioArray= sizeof($cms);
			$expresion_regular="a:$tamanioArray:{";
			
			for($i=0;$i<$tamanioArray;$i++){
			if($cms[$i]== 'wp'){
				$expresion_regular .= "i:$i;s:9:'WordPress';";	
			}
			if($cms[$i]== 'drupal'){
				$expresion_regular .= "i:$i;s:6:'Drupal';";	
			}
			if($cms[$i]== 'joomla'){
				$expresion_regular .= "i:$i;s:6:'Joomla';";	
			}
			if($cms[$i]== 'moodle'){
				$expresion_regular .= "i:$i;s:6:'Moodle';";	
			}
			if($cms[$i]== 'presthashop'){
				$expresion_regular .= "i:$i;s:10:'Presthashop';";	
			}
			if($cms[$i]== 'magento'){
				$expresion_regular .= "i:$i;s:7:'Magento';";	
			}
			$expresion_regular .="}";
		}
		$insercion_meta[14]= array('post_id'=>$post_id, 'meta_key'=>'cms', 'meta_value'=>$expresion_regular);
		
		$insercion_meta[15]= array('post_id'=>$post_id, 'meta_key'=>'_cms', 'meta_value'=>'field_5a38e4eb9b5aa');
		}
		$insercion_meta[16]= array('post_id'=>$post_id, 'meta_key'=>'estudios', 'meta_value'=>$estudios);
		$insercion_meta[17]= array('post_id'=>$post_id, 'meta_key'=>'_estudios', 'meta_value'=>'field_5a38e20b9b5a8');
		$insercion_meta[18]= array('post_id'=>$post_id, 'meta_key'=>'experiencia', 'meta_value'=>$experiencia);
		$insercion_meta[19]= array('post_id'=>$post_id, 'meta_key'=>'_experiencia', 'meta_value'=>'field_5a38e1829b5a7');
		$insercion_meta[20]= array('post_id'=>$post_id, 'meta_key'=>'email', 'meta_value'=>$email);
		$insercion_meta[21]= array('post_id'=>$post_id, 'meta_key'=>'_email', 'meta_value'=>'field_5a69fe9de520b');
		
		for($i=0;$i<sizeof($insercion_meta);$i++){
			//echo "$insercion_meta[$i]<br>";
			//mysql_query($insercion_meta[$i], $conectar)
			//;	
			$wpdb->insert(('BD_postmeta'), $insercion_meta[$i]);
		}
		$direccion_post.=$post_id;
		//$update_post= "UPDATE 'BD_postmeta' SET 'guid'=$direccion_post WHERE 'post_id'=$post_id";
		//mysql_query($update_post, $conectar);
		$wpdb->update('BD_posts', array('guid'=>$direccion_post), array('ID'=>$post_id), array('%s'), array('%d'));
		?>
     <section>
        <article id="primary" class="content-area">
			<main id="main" class="site-main container" role="main">
            	<a href="<?php echo $direccion_post;?>">Ir al currículum recien creado.</a>
            </main>
         </article>
      </section>
        <?php
		//TRATAMIENTO DE LA IMAGEN
		if($_POST['formIMG']= "Si"){
			$nombre_archivo = $_FILES['imagen']['name'];
			$tipo_archivo = $_FILES['imagen']['type'];
			$tamano_archivo = $_FILES['imagen']['size'];
			
			$directorio_archivos = wp_upload_dir(); // obtenemos la ubicación de los archivos subidos en nuestro WordPress
			$absoluto_archivos = $upload_dir_var['path']; // obtenemos el path absoluto de la carpeta de archivos subidos
  			$nombre_archivo = trim($nombre_archivo); // eliminamos posibles espacios antes y después del nombre de archivo
			$nombre_archivo = ereg_replace(" ", "-", $nombre_archivo); // eliminamos posibles espacios intersticiales en el nombre de archivo
			$absolutoArchivos = realpath($absoluto_archivos); // nos aseguramos de que el path de la carpeta de archivos subidos es absoluto
			
			// esto es importante, si no es absoluto no funcionar
  			$archivo_definitivo = $absolutoArchivos.'/'.$nombre_archivo; // formamos el nombre definitivo que tendrá el archivo
  			$archivo_BD = preg_replace('/\.[^.]+$/', '', basename($archivo_definitivo)); // este es el nombre que tendrá la imagen en la base de datos de imágenes de WordPress
			
			if ( file_exists($archivo_definitivo) ) { // si un archivo con el mismo nombre ya existe se añade un sufijo al nombre
		    	$count = "0";
          		while ( file_exists($archivo_definitivo) ) {
          			$count++;
          			if ( $tipo_archivo == 'image/jpeg' ) { $exten = 'jpg'; }
          			elseif ( $tipo_archivo == 'image/png' ) { $exten = 'png'; }
          			elseif ( $tipo_archivo == 'image/gif' ) { $exten = 'gif'; }
					
          			$archivo_definitivo = $absolutoArchivos.'/'.$archivo_BD.'-'.$count.'.'.$exten;
         	 	}
  			} // fin if file_exists
			
			if (move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_definitivo)) {
          		// aquí ejecutamos el código para insertar la imagen en la base de datos
				$post_id = $post_id; // el identificador del post o página al que queremos asociar la imagen
          		$slugname = preg_replace('/\.[^.]+$/', '', basename($archivo_definitivo)); // tras la reubicación del archivo definimos definitivamente su nombre
          		$attachment = array(
          		'post_mime_type' => $tipo_archivo, // tipo de archivo
          		'post_title' => $slugname, // el nombre del archivo en la Libreria de medios
          		'post_content' => '', // contenido extra asociado a la imagen
          		'post_status' => 'inherit'
             	);

         		$attach_id = wp_insert_attachment( $attachment, $archivo_definitivo, $post_id );
         		// se debe incluir el archivo image.php para que la función wp_generate_attachment_metadata() funcione

         		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
         		$attach_data = wp_generate_attachment_metadata( $attach_id, $archivo_definitivo );

         		wp_update_attachment_metadata( $attach_id,  $attach_data );
			}
			else {
          		// mensaje de error
				echo "Error al subir la imagen";
  			}
		}
		else{
			if($_POST['sexo']="hombre"){
				$wpdb->insert('BD_postmeta',array('post_id'=>$post_id, 'meta_key'=>'_thumbnail_id', 'meta_value'=>107));
			}
			else{
				$wpdb->insert('BD_postmeta',array('post_id'=>$post_id, 'meta_key'=>'_thumbnail_id', 'meta_value'=>108));
			}	
		}
		
	}
	else{
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
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );?>
			<form id="formCV" action="http://www.proyectohector.cf.mialias.net/haz-tu-propio-curriculum" method="post" enctype="multipart/form-data">
            	<div id="cajaNombre"><label for="nombre">Nombre y apellidos:</label><input id="formNombre" name="nombre" type="text"/></div>
				<div id="cajaImagen">
					<label for="formIMG">¿Desea establecer una imagen destacada?:</label>
                    	<input id="formSiIMG" name="formIMG" type="radio" value="Si"> Si 
                        <input id="formNoIMG" name="formIMG" value="No" type="radio"> No
					<div id="cajaSeleccionImagen">
                    	<label for="imagen">Seleccione la imagen que quiera subir: </label><input type="file" id="imagen" name="imagen">
                    </div>                        
                    <div id="cajaSexo">
			  			<label for="sexo">Indique su sexo:</label>
                        	<input id="sexo" name="sexo" type="radio" value="hombre"> Hombre
                            <input id="sexo" name="sexo" type="radio" value="mujer"> Mujer
					</div>
				</div>
			<div id="cajaContacto">
            	<div id="cajaDireccion">
					<label for="direccion">Dirección:</label><input id="formDireccion" name="direccion" type="text">
		     	</div>
		    	<div id="cajaTelFijo">
					<label for="telefonoFijo">Teléfono fijo:</label><input id="formTelFijo" name="telefonoFijo" type="tel"/>
		    	</div>
		    	<div id="cajaTelMovil">
					<label for="telefonoMovil">Teléfono móvil:</label><input id="formTelMovil" name="telefonoMovil" type="tel"/>
                <div id="cajaEmail">
                	<label for="email">Correo electrónico:</label><input id="formEmail" name="email" type="email"/>
                </div>	
				<div id="cajaFormacion">
					<label for="estudios">Estudios:</label><textarea id="formEstudios" name="estudios" rows="10" cols="50"></textarea>
				</div>
				<div id="cajaExperiencia">
					<label for="experiencia">Experiencia:</label><textarea id="formExperiencia" name="experiencia" rows="10" cols="50"></textarea>
				</div>
		<div id="cajaConocimientos">
			<div id="cajaLengProgramacion">
				<label for="formLengProgramacion">Lenguajes de programación</label><input id="formLengProgramacion" name="lenguajesProgramacion[]" type="checkbox" value="formLengProgramacion">
                                <div id="ocultoLengProgramacion" class="oculto">
                                    <label for="java">Java</label><input id="java" name="ocultoLengProg[]" type="checkbox" value="java"/>
                                    <label for="php">PHP</label><input id="php" name="ocultoLengProg[]" type="checkbox" value="php"/>
                                    <label for="phyton">Phyton</label><input id="phyton" name="ocultoLengProg[]" type="checkbox" value="phyton"/>
                                    <label for="cAlmohadilla">C#</label><input id="cAlmohadilla" name="ocultoLengProg[]" type="checkbox" value="cAlmohadilla"/>
                                    <label for="cMasMas">C++</label><input id="cMasMas" name="ocultoLengProg[]" type="checkbox" value="cMasMas"/>
                                     <label for="c">C</label><input id="c" name="ocultoLengProg[]" type="checkbox" value="c"/>
                                    <label for="javascript">Javascript</label><input id="javascript" name="ocultoLengProg[]" type="checkbox" value="javascript"/>
                                    <label for="perl">Perl</label><input id="perl" name="ocultoLengProg[]" type="checkbox" value="perl"/>
                                </div>
			</div>
			<div id="cajaDisenioGrafico">
				<label for="formDisenioGrafico">Diseño de páginas web y/o gráfico</label><input id="formDisenioGrafico" name="disenioGrafico[]" type="checkbox" value="formDisenioGrafico">
                                <div id="ocultoDisenioGrafico" class="oculto">
                                    <label for="html">HTML</label><input id="html" name="ocultoDisGraf[]" type="checkbox" value="html"/>
                                    <label for="css">CSS</label><input id="css" name="ocultoDisGraf[]" type="checkbox" value="css"/>
                                    <label for="photoshop">Photoshop</label><input id="photoshop" name="ocultoDisGraf[]" type="checkbox" value="photoshop"/>
                                    <label for="illustrator">Illustrator</label><input id="illustrator" name="ocultoDisGraf[]" type="checkbox" value="illustrator"/>
                                    <label for="coreldraw">CorelDraw</label><input id="coreldraw" name="ocultoDisGraf[]" type="checkbox" value="coreldraw"/>
                                    <label for="indesign">Indesign</label><input id="indesign" name="ocultoDisGraf[]" type="checkbox" value="indesign"/>
                                    <label for="gimp">GIMP</label><input id="gimp" name="ocultoDisGraf[]" type="checkbox" value="gimp"/>
                                </div>
			</div>
			<div id="cajaLengBaseDatos">
				<label for="formLenguajesBD">Trabajo con Base de Datos</label><input id="formLenguajesBD" name="lenguajesBD[]" type="checkbox" value="formLenguajesBD">
                                <div id="ocultoLengBaseDatos" class="oculto">
                                    <label for="oracle">Oracle</label><input id="oracle" name="ocultoLengBD[]" type="checkbox" value="oracle"/>
                                    <label for="mysql">MySQL</label><input id="mysql" name="ocultoLengBD[]" type="checkbox" value="mysql"/>
                                    <label for="microsoftSQLServer">MicrosoftSQLServer</label><input id="microsoftSQLServer" name="ocultoLengBD[]" type="checkbox" value="microsoftSQLServer"/>
                                    <label for="postgreSQL">PostgreSQL</label><input id="postgreSQL" name="ocultoLengBD[]" type="checkbox" value="postgreSQL"/>
                                    <label for="mongoDB">MongoDB</label><input id="mongoDB" name="ocultoLengBD[]" type="checkbox"value="mongoDB" />
                                    <label for="aws">AWS</label><input id="aws" name="ocultoLengBD[]" type="checkbox" value="aws"/>
                                </div>
			</div>
			<div id="cajaCms">
				<label for="formCMS">Sistemas de gestión de contenidos</label><input id="formCMS" name="cms[]" type="checkbox" value="cms">
                                <div id="ocultoCMS" class="oculto">
                                    <label for="wp">WordPress</label><input id="wp" name="ocultCMS[]" type="checkbox" value="wp"/>
                                    <label for="drupal">Drupal</label><input id="drupal" name="ocultCMS[]" type="checkbox" value="drupal"/>
                                    <label for="joomla">Joomla</label><input id="joomla" name="ocultCMS[]" type="checkbox" value="joomla"/>
                                    <label for="moodle">Moodle</label><input id="moodle" name="ocultCMS[]" type="checkbox" value="moodle"/>
                                    <label for="presthashop">Presthashop</label><input id="presthashop" name="ocultCMS[]" type="checkbox" value="presthashop"/>
                                    <label for="magento">Magento</label><input id="magento" name="ocultCMS[]" type="checkbox" value="magento"/>
                                </div>
			</div>
		</div>
	<input type="submit" value="Enviar"/>
</form>

		<?php	endwhile; // End of the loop.?>
		</main><!-- #main -->
	</article><!-- #primary -->
</section>
<?php
}
get_footer();
