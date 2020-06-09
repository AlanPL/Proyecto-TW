<?php
    $error = false;


    $resp = array( "error" => false );
    $resp["data"] = array();

        // Existing array
    $arr = array('one' => 1, 'two' => 2);

    // New element
    $arr['zero'] = 0;

    require_once 'conexion.php';
    $con = conectar();
    if ($result = $con->query("SELECT COUNT(*) FROM alumno") ) {
        $row = $result->fetch_row();
        $resp["data"]['numAlumnos']= $row[0];
    } else {
        $resp['error'] = true;
        $resp['errorDesc'] = $mysqli->error;
    }

    if ($result = $con->query("SELECT COUNT(*) FROM materia") ) {
        $row = $result->fetch_row();
        $resp["data"]['numMaterias']= $row[0];
    } else {
        $resp['error'] = true;
        $resp['errorDesc'] = $mysqli->error;
    }

    $sql = "SELECT * FROM materia where Nivel = 'primero'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    if(!empty($result)) {
        if (mysqli_num_rows($result) > 0) {
            $materias = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($materias as $materia) :
                $resp["data"]["semestre1"]=$materia['Nombre'];
                /*$htmlCode .= "<tr>
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
                    </tr>";*/
             endforeach;

         }
    } else {
        $resp['error'] = true;
        //$resp['errorDesc'] = $mysqli->error;
    }


    $con -> close();
    echo json_encode($resp);

?>
