<?php
	session_start();

	//$_REQUEST[] es otro de los arreglos asociativos globales de PHP que contine toda la información relacionada a los arreglos $_POST[], $_GET[] y $_SESSION[]
	$temp = $_REQUEST["nombreSesion"];
	//inhabilitamos esta variable de sesion
	unset($_SESSION[$temp]);
	//redireccionamos a la pantalla del login
	header("location:../LoginAdmin.html");
?>
