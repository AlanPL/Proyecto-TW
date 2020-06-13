<?php
    session_start();
    include 'conexion.php';
    $func = $_GET["func"];
    $correo=$_SESSION["correo"];
    switch ($func) {
        case 'SeleccionarMaterias':
            seleccionarMaterias();
            break;
            break;
        default:

            break;
    }


    function seleccionarMaterias(){
        require_once 'conexion.php';
        $con = conectar();
        $htmlCode = "";
        $correo=$_SESSION["correo"];
        $sql = "select * from `alumno` where correo='".$correo."'"; //esta es una tabla q contiene un listado de titulos principales
        $res=mysqli_query($con,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
        $row = mysqli_fetch_assoc($res);
        $boleta=$row["boleta"];
        $sql1 = "SELECT * FROM horario JOIN materia ON horario.Id_materia=materia.Id_materia WHERE boleta='".$boleta."'";
        $result = mysqli_query($con, $sql1);

        if(mysqli_num_rows($result) > 0) {
            $materias = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($materias as $materia) :
                $htmlCode .= "<tr>
                    <td>".$materia['Nombre']."</td>
                    <td>".$materia['Nivel']."</td>
                    </tr>";
             endforeach;
        }else{
            $htmlCode .="<tr>
                <td> - </td>
                <td> - </td></tr>";
        }
        echo $htmlCode;
        $con -> close();

    }
?>
