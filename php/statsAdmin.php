<?php
    function numeroRegistros($nombreTabla){
        switch ($nombreTabla) {
            case 'alumno':
                $table = 'alumno';
                break;
            case 'materia':
                $table = 'materia';
                break;

            default:
                $table = '';
                break;
        }
        require_once 'conexion.php';
        $con = conectar();


        if ($result = $con->query("SELECT COUNT(*) FROM $table ") ) {
            $row = $result->fetch_row();
            return $row[0];
            $result->close();

        } else {
            return '-';
        }

        $con -> close();
    }

    


?>
