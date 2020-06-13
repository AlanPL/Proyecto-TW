<?php
    session_start();
    $correo=$_SESSION["correo"];
    include 'conexion.php';
    include '../Alumno/ElegirNivel.php';
    $func = $_POST["func"];
    switch ($func) {
        case 'RegistrarMaterias':
            registrarMaterias();
        break;
        case 'EditarContrasenaAl':
            editarContrasena();
        break;
        case 'EditarCorreoAl':
            editarCorreo();
        break;
        default:
            break;
    }

    function registrarMaterias(){
        $con=conectar();
        //$boleta=conseguirBoleta($correo,$con);
        $boleta = $_POST['boletaAlumno'];
        $recurse='0';
        $Id = $_POST['checkbox'];
        if(isset($boleta) && !empty($boleta)){
                print_r($Id);
                foreach($Id as $checks => $checked){
                    $selected = $checked;
            $consulta = $con->prepare("INSERT INTO horario ( boleta, Id_materia,recurse ) VALUES (?, ?, ?)");
            $consulta -> bind_param('sss', $boleta, $selected,$recurse);
            if ($consulta -> execute() ) {
                       //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
                       echo 1;
                    }else{
                        //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
                        echo 0;
                    }
                }
        }else {
            //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            echo 0;
        }
        $con->close();
    }

    function editarContrasena(){
        $con=conectar();
        $boleta = $_POST['boletaAlumno'];
        $contrasena=$_POST['ContrasenaNueva'];
        if(isset($boleta) && !empty($boleta)){
            $consulta = $con->prepare("UPDATE alumno SET contrasena=? WHERE boleta=?");
            $consulta -> bind_param('ss', $contrasena, $boleta);
            if ($consulta -> execute() ) {
                       //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
                       echo 1;
                    }else{
                        //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
                        echo 0;
                    }
        }else {
            //header("location:../Admin/admin.php?page=AgregarMateria&success=false");
            echo 0;
        }
        $con->close();  
    }

    function editarCorreo(){
        $con=conectar();
        $boleta = $_POST['boletaAlumno'];
        $correoN=$_POST['CorreoNuevo'];
        if(isset($boleta) && !empty($boleta)){
            $consulta = $con->prepare("UPDATE alumno SET correo=? WHERE boleta=?");
            $consulta -> bind_param('ss', $correoN, $boleta);
            if ($consulta -> execute() ) {
                       //header("location:../Admin/admin.php?page=AgregarMateria&success=true");
                       echo 1;
                    }else{
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
