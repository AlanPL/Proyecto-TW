<?php
    include 'conexion.php';
    $func = $_POST["func"];

    switch ($func) {
        case 'AgregarMateria':
            agregarMateria();
            break;
        case 'BorrarMateria':
            borrarMateria();
            break;
        case 'SeleccionarMaterias':
            seleccionarDatos('materia');
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

    function seleccionarDatos($table){
        require_once 'conexion.php';
        $con = conectar();
        $htmlCode = "";
        $sql = "SELECT * FROM $table";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $materias = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($materias as $materia) :
                $htmlCode .= "<tr>
                    <td>".$materia['Nombre']."</td>
                    <td>".$materia['Nivel']."</td>
                    <td>
                        <button type='button'  class='btn btn-primary'>Editar
                        </button>
                    </td>
                    <td> <button type='button' onClick='btnDeleteUAClicked(".$materia['Id_materia'].")' id='".$materia['Id_materia']."' data-toggle='modal' class='btn btn-danger btnDeleteUA' data-target='#DeleteUAModal'>
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
?>
