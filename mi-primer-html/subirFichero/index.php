<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<form action="subearchivo.php" method="post" enctype="multipart/form-data">
    	<b>Campo de tipo texto</b><br /><input type="text" name="cadenaTexto" size="20" maxlength="100" /><br /><br />
        <b>Enviar un nuevo archivo: </b><br /><input type="file" name="archivo" /><br /><br /><br />
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>