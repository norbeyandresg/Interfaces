<?php
	//url host, usuario, contraseña, nombre bd
	$mysqli = new mysqli('localhost', 'root', 'root', 'revista');
	$mysqli -> set_charset("utf8");
	$queryCiudad = $mysqli -> query("SELECT * FROM ciudad");

	$queryRevista = $mysqli -> query("SELECT * FROM revista")
?>
