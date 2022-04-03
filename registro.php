<!DOcTYPE html>
<html>
  <head>
    <title>Registro de usuario</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="startestilos.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link href='https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap' rel="stylesheet">
	<link href='https://fonts.googleapis.com/css2?family=Istok+Web:wght@700&family=Ubuntu:wght@300&display=swap' rel="stylesheet">
	<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
  </head>
  <body>
  <h2>Registro de usuario cliente</h2>
     <form method="POST">
	  <input class="usuario1" id="nombre" type="text" name="name" placeholder="Nombres" >
	  <input class="usuario1" id="correo" type="text" name="correo" placeholder="Email" >
	  <input class="usuario1" id="password" type="password" name="password" placeholder="Contraseña">
	  <input type="submit" name="register" class="usuario1" id="enviar">
	 </form>
	 
	 <?php
	 include("include/con_db.php");
	 ?>
  </body>
</html>