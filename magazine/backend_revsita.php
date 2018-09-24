<?php
	//url host, usuario, contraseña, nombre bd
	$mysqli = new mysqli('localhost', 'root', 'root', 'revista');
	$mysqli -> set_charset("utf8");
	$query = $mysqli -> query("SELECT * FROM ciudad");

	$query_2 = $mysqli -> query("SELECT * FROM revista")
?>
