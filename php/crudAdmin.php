<?php
    include 'conexion.php';
    $func = $_POST["func"];

    switch ($func) {
        case 'AgregarMateria':
            agregarMateria();
            break;
        case 'AgregarAlumno':
            agregarAlumno();
            break;
        case 'EditarMateria':
            editarMateria();
            break;
        case 'BorrarMateria':
            borrarMateria();
            break;
        case 'BorrarAlumno':
            borrarAlumno();
            break;

        default:

            break;
    }

    function borrarMateria(){
        $con = conectar();
        $id = $_POST["id"];
        $response =0;
        if (isset($id) && !empty($id)) {
            $consulta = $con->prepare("DELETE FROM materia WHERE Id_materia = ? ");
            $consulta -> bind_param('i', $id);

            if ($consulta -> execute() ) {
                $response = 1;
            } else {
                $response = 0;
            }
        }else {
            $response = 0;
        }
        $con->close();
        echo $response;
    }
    function borrarAlumno(){
        $con = conectar();
        $id = $_POST["id"];
        $response =0;
        if (isset($id) && !empty($id)) {
            $consulta = $con->prepare("DELETE FROM alumno WHERE boleta = ? ");
            $consulta -> bind_param('s', $id);

            if ($consulta -> execute() ) {
                $response = 1;
            } else {
                $response = 0;
            }
        }else {
            $response = 0;
        }
        $con->close();
        echo $response;
    }

    function agregarMateria(){
        $con = conectar();
        $nombre = $_POST["nombre"];
        $nivel = $_POST["nivel"];

        if (isset($nombre) && isset($nivel) && !empty($nombre) && !empty($nivel) ) {
            $consulta = $con->prepare("INSERT INTO materia ( nombre, nivel ) VALUES (?, ?)");
            $consulta -> bind_param('ss', $nombre, $nivel);

            if ($consulta -> execute() ) {
               //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
               echo 1;
            } else {
                //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
                echo 0;
            }
        }else {
            //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            echo 0;
        }
        $con->close();
    }

    function agregarAlumno(){
        $con = conectar();
        $boleta = $_POST["boleta"];
        $nombre = $_POST["nombre"];
        $apaterno = $_POST["apellido_1"];
        $amaterno = $_POST["apellido_2"];
        $correo = $_POST["correo"];
        $contra = $_POST["contrasenia"];
        $d = '2009-04-30';
        $estado = "estado";

        if (!empty($boleta) && !empty($nombre) && !empty($apaterno) &&
            !empty($amaterno) && !empty($correo) && !empty($contra) ) {
            $consulta = $con->prepare("INSERT INTO alumno ( boleta, nombre, primerApe, segundoApe, correo, fechaNac, contrasena, auditoria, estado ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)" );
            $consulta -> bind_param('sssssssss', $boleta, $nombre, $apaterno, $amaterno, $correo, $d, $contra, $d, $estado);

            if ($consulta -> execute() ) {
               //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
               echo 1;
            } else {
                //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
                echo 0;

            }
        }else {
            //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            echo 0;
        }
        $con->close();
    }

    function editarMateria(){
        $con = conectar();
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $nivel = $_POST["nivel"];

        if (isset($nombre) && isset($nivel) && !empty($nombre) && !empty($nivel) && !empty($id) && !empty($id) ) {
            $consulta = $con->prepare("UPDATE materia SET Nombre=?, Nivel=? WHERE Id_materia=?");
            $consulta -> bind_param('ssi', $nombre, $nivel, $id);

            if ($consulta -> execute() ) {
               //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
               echo 1;
            } else {
                //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
                echo 0;
            }
        }else {
            //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            echo 0;
        }
        $con->close();
    }

?>
