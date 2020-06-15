<?php
include("configBD.php");
include("getPosts.php");
$respAX = [];
//require_once('conexion.php');
$boleta = $_POST["boleta"];
/*$nombre = $_POST["nombre"];
$apellido_1 = $_POST["apellido_1"];
$apellido_2 = $_POST["apellido_2"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$contrasenia = $_POST["contrasenia"];*/
$sql1="SELECT * FROM alumno WHERE boleta = '$boleta'";
$resChckBoleta = mysqli_query($conexion,$sql1);
$infChckBoleta = mysqli_num_rows($resChckBoleta);
//$resultado = $con->query($sql1);
//$fila= mysqli_num_rows($resultado);

if($infChckBoleta >= 1){
    $respAX["cod"] = 2;
    $respAX["msj"] = "<h5>La Boleta ya est&aacute; registrada. Favor de intentarlo nuevamente.</h5>";
}else{
    $contrasena = md5($contrasena);
    $sqlInsBoleta = "INSERT INTO alumno VALUES ('$boleta','$nombre','$primerApe','$segundoApe','$correo','$fechaNac','$contrasena',NOW())";
    $resInsBoleta = mysqli_query($conexion,$sqlInsBoleta);
    $infInsBoleta = mysqli_affected_rows($conexion);
    if($infInsBoleta == 1){
        $respAX["cod"] = 1;
        $respAX["msj"] = "<h5>El registro se realiz&oacute; correctamente. Gracias :)</h5>";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "<h5>No se pudo realizar el registro. Favor de intentarlo nuevamente</h5>";
    }
}

    echo json_encode($respAX);

/*if($fila == 0){
    $sql="INSERT INTO alumno (boleta,nombre,primerApe,segundoApe,correo,fechaNac,contrasena) VALUES ('$boleta','$nombre','$apellido_1','$apellido_2','$correo','$fecha','$contrasenia',NOW())" ;

    $insert= $con->query($sql) or die (mysqli_errno());
    echo 1;
}else{
    echo 0;
}*/

/*$sql="INSERT INTO alumno (boleta,nombre,primerApe,segundoApe,correo,fechaNac,contrasena) values ('"$boleta."','"$nombre."','"$apellido_1."','"$apellido_2."','"$correo."','"$fecha."','"$contrasenia."')" ;

$insert= $con->query($sql) or die (mysqli_errno());*/

/*if($insert){
    echo 1;
}else{
    echo 0;
}*/
?>