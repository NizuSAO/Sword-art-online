<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="sao.css">
	<title>Sword art online</title>
</head>
<body>
	<form method="post">
	<h1 style="color: white">Sao Unital Ring Space game</h1>
	<section class="form-register">
		<h3>Registro de jugador</h3>
		<input class="controls" type="text" name="nombres" placeholder="ingresar su id de jugador">
		<input class="controls" type="password" name="contraseña" placeholder="ingresar su contraseña">
		<input class="controls" type="email" name="correo" placeholder="ingresar su email">
		<input class="controls" type="date" name="fecha" placeholder="ingresar su fecha">
		<p>Estoy de acuerdo con los <a href="terminosycondiciones.html">terminos y condiciones</a> </p>
		<input class="botons" type="submit" name="Registrar">
		<p><a href="yatengocuenta.html">ya tengo cuenta</a></p>
	</section>
	</form>

	<?php
	include("registrar.php") 
	 ?>

</body>
</html>