<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$cadenaTexto= $_POST["cadenaTexto"];
	echo "Escribió en la cadena de texto: $cadenaTexto<br><br>";
	
	$nombreArchivo= $_FILES['archivo']['name'];
	$tipo_archivo= $_FILES['archivo']['type'];
	$tamanio_archivo= $_FILES['archivo']['size'];
	
	if(!(strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamanio_archivo<100000)){
		echo "La extensión o el tamaño del archivo no es correcta <table><tr><td><li>Se permiten archivos .gif o .jpf</li><br><li>Se permiten archivos de 100 Kb máximo</li></td></tr></table>";
		
		echo "<input onclick='javascript:window.history.back()' type='button' name='volver' value='Volver' />";
	}
	else{
		mkdir("imagenes", 0700);
		$ruta= "imagenes/$nombreArchivo";
		chmod($ruta, 0777);
		//$ruta= "/mi-primer-html/subirFichero/imagenes/$nombreArchivo";
		
		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)){
			echo "El archivo ha sido cargado correctamente<br>";
			echo "<img src=$ruta/>";
			echo "<a href='index.php'>¿Quieres seguir subiendo imágenes?</a>";
		}
		else{
			echo "Ocurrió algún error al subir el fichero. No puedo guardarse<br>";
			echo "<input onclick='javascript:window.history.back();' type='button' name='volver' value='Volver' />";
		}
	}
?>
</body>
</html>