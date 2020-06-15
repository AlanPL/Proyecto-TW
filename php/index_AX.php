<?php
    
    session_start();
    include("configBD.php");
    include("getPosts.php");

    $respAX = [];
    
    $contrasena = md5($contrasena);
    $sql = "SELECT * FROM alumno WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $res = mysqli_query($conexion, $sql);
    
    $inf = mysqli_num_rows($res);
    if($inf == 1){
        
        $_SESSION["correo"] = $correo;
        $respAX["val"] = 1;
        $respAX["msj"] = "<h5>Bienvenido!!! :)</h5>";
        echo json_encode($respAX);
    }else{
        $respAX["val"] = 0;
        $respAX["msj"] = "<h5>Datos incorrectos. Favor de intentarlo nuevamente.</h5>";
        echo json_encode($respAX);
    }
?>
