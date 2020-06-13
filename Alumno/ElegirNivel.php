<?php
	function ElegirNivel($nivel,$conn){
    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
    $i=0;
    while($row = mysqli_fetch_assoc($res)){
      $title[$i]=$row["Nombre"];
      $codtit[$i]=$row["Id_materia"];?>
      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
        $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
        $j=0;
        $cero=0;
        while($rowx = mysqli_fetch_assoc($resx)){
          $item[$j]=$rowx["Nombre"];
          $coditem[$j]=$rowx["Id_materia"];?>
          <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox[]" onClick="informarItemsElegidos('checkbox[]')" value="<?php echo $codtit[$i];?>">          <!--// asignamos el codigo de item-->
            <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
          </div>
        <?php $j++;
        //if (isset($_POST['checkbox'])){
          //echo $_POST['checkbox']; // Muestra el valor de la casilla de verificación marcada.
        //}
        }
        mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
      <?php $i++;
    }
    mysqli_free_result($res);

    /*if(!empty($_POST['checkbox'])) {
      // Contando el numero de input seleccionados "checked" checkboxes.
      $checked_contador = count($_POST['checkbox']); //checkbox en todos estos casos es el name
      echo "<p>Has seleccionado los siguientes ".$checked_contador." opcione(s):</p> <br/>";
      // Bucle para almacenar y visualizar valores activados checkbox.
      foreach($_POST['checkbox'] as $seleccion) {
        echo "<p>".$seleccion ."</p>"; alert("seleccion");
      }
      echo "<br/><b>Nota :</b> <span>De manera similar, también puede realizar operaciones CRUD usando estos valores seleccionados.</span>";
    }else{
      echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
    }*/
   }

  function conseguirNombre($correo,$conn){
    $sql = "select * from `alumno` where correo='".$correo."'";
    $res=mysqli_query($conn,$sql) or die(mysql_error());
    $row = mysqli_fetch_assoc($res);    //obtener una fila de resultado
    $nombre = $row["nombre"];
    $ApPaterno = $row["primerApe"];
    $ApMaterno = $row["segundoApe"];
    echo $nombre;echo " "; echo $ApPaterno;echo " "; echo $ApMaterno;
   }

  function conseguirBoleta($correo,$conn){
    $sql = "select * from `alumno` where correo='".$correo."'";
    $res=mysqli_query($conn,$sql) or die(mysql_error());
    $row = mysqli_fetch_assoc($res);    //obtener una fila de resultado
    $boleta = $row["boleta"];
    echo $boleta;
   }

  function conseguirContrasena($correo,$conn){
    $sql = "select * from `alumno` where correo='".$correo."'";
    $res=mysqli_query($conn,$sql) or die(mysql_error());
    $row = mysqli_fetch_assoc($res);    //obtener una fila de resultado
    $boleta = $row["contrasena"];
    echo $boleta;
   }
?>