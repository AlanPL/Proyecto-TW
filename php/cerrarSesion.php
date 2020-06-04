<?php
	session_start();

	//$_REQUEST[] es otro de los arreglos asociativos globales de PHP que contine toda la información relacionada a los arreglos $_POST[], $_GET[] y $_SESSION[]
	//inhabilitamos esta variable de sesion
	unset ($SESSION['nombreSesion']);
	session_destroy();
	//redireccionamos a la pantalla del login
	header('Location: ../index.html');
?>