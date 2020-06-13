<?php
    $error = false;


    $resp = array( "error" => false );
    $resp["data"] = array();

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

    if ($result = $con->query("SELECT COUNT(*) FROM horario") ) {
        $row = $result->fetch_row();
        $resp["data"]['solicitudesTotales']= $row[0];
    } else {
        $resp['error'] = true;
        $resp['errorDesc'] = $mysqli->error;
    }

    $indexSemestre=0;
    for ($i=2; $i < 7; $i++) {

        $sql = "SELECT count(*) FROM horario h INNER JOIN materia m ON h.Id_materia = m.Id_materia where m.nivel = $i ";

        if ($result = $con->query($sql) ) {
            $row = $result->fetch_row();
            $resp["data"]['solicitudesPorSemestre'][$indexSemestre]= $row[0];
        } else {
            $resp['error'] = true;
            $resp['errorDesc'] = $mysqli->error;
        }
        $indexSemestre++;
    }

    for ($i=2; $i < 7; $i++) {
        $sql = "SELECT
                	m.nombre,
                    sum(case when h.recurse = '0' then 1 else 0 end) AS primeraVez,
                	sum(case when h.recurse = '1' then 1 else 0 end) AS recurse,
                    sum(case when h.recurse = '2' then 1 else 0 end) AS sinRecurse
                FROM
                    horario h
                INNER JOIN materia m
                    ON h.Id_materia = m.Id_materia where m.nivel=$i group by h.Id_materia";

        $result = mysqli_query($con, $sql) or die(mysqli_error($con));

        if(!empty($result)) {
            if (mysqli_num_rows($result) > 0) {
                $materias = mysqli_fetch_all($result,MYSQLI_ASSOC);
                $indexMateria = 0;
                foreach($materias as $materia) :
                    $resp["data"]["semestre".$i][$indexMateria]['nombre']=$materia['nombre'];
                    $resp["data"]["semestre".$i][$indexMateria]['recurse']=$materia['recurse'];
                    $resp["data"]["semestre".$i][$indexMateria]['primeraVez']=$materia['primeraVez'];
                    $resp["data"]["semestre".$i][$indexMateria]['sinRecurse']=$materia['sinRecurse'];
                    $indexMateria++;
                 endforeach;

             }
        } else {
            $resp['error'] = true;
            //$resp['errorDesc'] = $mysqli->error;
        }
    }




    $con -> close();
    echo json_encode($resp);

?>
