<?php
    //Suponemos que los datos que llegaron desde el supuesto formulario anterior se checan contra una BD y los resultados simplemente son: datos correctos o datos incorrectos. En función a esto habra que redirigir a la página exclusiva del alumno o volverlo al formulario de login. El redireccionamiento, independientemente del caso se logra con php usando la función header() https://www.php.net/manual/es/function.header.php

    session_start();
    //Cambiar valor de 0 a 1 para poder ver las variantes de la funcionalidad
    include 'conexion.php';
    $con = conectar();

    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    $consulta = $con->prepare('SELECT * FROM admin WHERE correo = ? AND contrasena= ?');
    $consulta -> bind_param('ss', $correo, $contrasenia);

    $consulta->execute();
    $result = $consulta->get_result();

    if($row = $result->fetch_assoc()){

        $_SESSION["correo"] = $correo;
        header("location:../Admin/admin.php");
    }else{
        header("location: ../LoginAdmin.html");
    }
    $con->close();
?>
