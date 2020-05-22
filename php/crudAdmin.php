<?php
    //Suponemos que los datos que llegaron desde el supuesto formulario anterior se checan contra una BD y los resultados simplemente son: datos correctos o datos incorrectos. En función a esto habra que redirigir a la página exclusiva del alumno o volverlo al formulario de login. El redireccionamiento, independientemente del caso se logra con php usando la función header() https://www.php.net/manual/es/function.header.php
    $func = $_GET["func"];
    include 'conexion.php';


    switch ($func) {
        case 'AgregarMateria':
            agregarMateria();
            break;
        default:

            break;
    }

    function agregarMateria(){
        $con = conectar();
        $nombre = $_POST["nombre"];
        $nivel = $_POST["nivel"];

        if (isset($nombre) && isset($nivel) && !empty($nombre) && !empty($nivel) ) {
            $consulta = $con->prepare("INSERT INTO materia ( nombre, nivel ) VALUES (?, ?)");
            $consulta -> bind_param('ss', $nombre, $nivel);

            if ($consulta -> execute() ) {
               header("location:../Admin/admin.php?page=AgregarMateria&success=true");
            } else {
                header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            }
        }else {
            header("location:../Admin/admin.php?page=AgregarMateria&success=false");
        }
        $con->close();
    }
?>
