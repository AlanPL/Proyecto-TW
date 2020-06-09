<?php
    include 'conexion.php';
    $func = $_GET["func"];

    switch ($func) {
        case 'SeleccionarMaterias':
            seleccionarMaterias();
            break;
        case 'SeleccionarAlumnos':
            seleccionarAlumnos();
            break;
        case 'SeleccionarMateriaId':
            if (isset($_GET["id"])) {
                seleccionarMateria($_GET["id"]);
            }
            break;
        default:

            break;
    }


    function seleccionarMaterias(){
        require_once 'conexion.php';
        $con = conectar();
        $htmlCode = "";
        $sql = "SELECT * FROM materia";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $materias = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($materias as $materia) :
                $htmlCode .= "<tr>
                    <td>".$materia['Nombre']."</td>
                    <td>".$materia['Nivel']."</td>
                    <td>
                        <button type='button'  onClick='btnEditUAClicked(".$materia['Id_materia'].")' class='btn btn-primary'>Editar
                        </button>
                    </td>
                    <td> <button type='button' onClick='btnDeleteUAClicked(".$materia['Id_materia'].")'  data-toggle='modal' class='btn btn-danger btnDeleteUA' data-target='#DeleteUAModal'>
                            Eliminar
                        </button>
                    </td>
                    </tr>";
             endforeach;
        }else{
            $htmlCode .="<tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td></tr>";
        }
        echo $htmlCode;
        $con -> close();

    }

    function seleccionarAlumnos(){
        require_once 'conexion.php';
        $con = conectar();
        $htmlCode = "";
        $sql = "SELECT * FROM alumno";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $alumnos = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($alumnos as $alumno) :
                $boleta = $alumno['boleta'];
                $htmlCode .= "<tr>
                    <td>".$alumno['nombre']." ".$alumno['primerApe']." ".$alumno['segundoApe']."</td>
                    <td>".$alumno['boleta']."</td>
                    <td>".$alumno['fechaNac']."</td>
                    <td>".$alumno['correo']."</td>
                    <td>".$alumno['auditoria']."</td>
                    <td>".$alumno['estado']."</td>
                    <td>
                        <button type='button'  onClick='btnEditAlumnoClicked(\"$boleta\")' class='btn btn-primary'>Editar
                        </button>
                    </td>
                    <td> <button type='button' onClick='btnDeleteAlumnoClicked(\"$boleta\")'  data-toggle='modal' class='btn btn-danger ' data-target='#DeleteAlumnoModal'>
                            Eliminar
                        </button>
                    </td>
                    </tr>";
             endforeach;
        }else{
            $htmlCode .="<tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                </tr>";
        }
        echo $htmlCode;
        $con -> close();

    }

    function seleccionarMateria($id){
        require_once 'conexion.php';
        $con = conectar();

        $sql = $con->prepare("SELECT * FROM materia where Id_materia = ? limit 1");

        $sql -> bind_param('i', $id);
        $sql->execute();
        $result = $sql->get_result();

        $resp;
        if(mysqli_num_rows($result) > 0) {

            $value = $result->fetch_object();

            $resp = array( "found" => true , "data" => $value);

        }else{
            $resp = array( "found" => false );
        }
        $con -> close();

        //$out = array_values($array);

        echo json_encode($resp);

    }
?>
