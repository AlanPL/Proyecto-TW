  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Materias</h1>
          </div>
          <p>Selecciona las materias que te interesen meter para el próximo semestre, recuerda que solo puedes inscribir un máximo de 7 materias</p>
          <div class="row">
            <div class="col-lg-4">
               <form name="formulario2">
                    <h4>Materias seleccionadas: <input type="text" id="cajaTexto" class="texto" value="0" > / 7</h4>
                
            <!--<div class="progress mb-4">
                <div class="progress-bar" id="progreso" role="progressbar" style="width:25" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
                
          </div>-->
                </form></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <form name="formulario3">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ConfirmacionRegistro">
                    <button href="#" id="boton"  class="btn btn-success btn-icon-split" disabled>
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text" data-toggle="modal" data-target="#ConfirmacionRegistro">Enviar Registro</span>
                    </button></a></form>
            </div>
          </div>

                          <!-- Envio de Registro-->
          <div class="modal fade" id="ConfirmacionRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Todo listo?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body" align="center">Esta acci&oacute;n no se puede deshacer<br>¿Seguro que ya acabaste?</div>
          
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <a class="btn btn-primary" href="registro_completo.php">S&iacute;, enviar</a>
                </div>
              </div>
            </div>
          </div>
            
          <div class="card shadow mb-4">
                  
<!--Primer Nivel-->
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#primero')">
                        <h6 class="m-0 font-weight-bold text-primary">Primer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                    </nav>
                </div>
                 <form name="formulario" method="post" action="">
                    <div class="card-body" id="primero" hidden="true">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">          
                                    <input type="checkbox" class="custom-control-input" id="MatDis" name="checkbox1" onClick="validar(formulario.checkbox1,0)">
                                    <label class="custom-control-label" for="MatDis">Matem&aacute;ticas discretas</label><br><br>
                               </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="AnVect" name="checkbox2" onClick="validar(checkbox2,0)">    
                                    <label class="custom-control-label" for="AnVect">An&aacute;lisis vectorial</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Calculo" name="checkbox3" onClick="validar(checkbox3,0)">
                                    <label class="custom-control-label" for="Calculo">C&aacute;lculo</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Algoritmia" name="checkbox4" onClick="validar(checkbox4,0)">
                                    <label class="custom-control-label" for="Algoritmia">Algoritmia y programaci&oacute;n estructurada</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Fisica" name="checkbox5" onClick="validar(checkbox5,0)">    
                                    <label class="custom-control-label" for="Fisica">F&iacute;sica</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="IngEt" name="checkbox6" onClick="validar('checkbox6',0);">
                                    <label class="custom-control-label" for="IngEt">Ingenier&iacute;a &eacute;tica y sociedad</label>
                                </div>
                        </div>   
                  </div>
<!--Segundo Nivel-->      
                <div class="card-header py-3">
                  <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#segundo')">
                    <h6 class="m-0 font-weight-bold text-primary" >Segundo nivel</h6>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                    </a>
                    </nav>
                </div>
                <div class="card-body" id="segundo" hidden="true">
                    <?php   $nivel=2;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?>   
                </div>                 
<!--Tercer Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#tercero')">
                      <h6 class="m-0 font-weight-bold text-primary">Tercer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                  <div class="card-body" id="tercero" hidden="true">
                      <!--De aqui...-->
                    <?php   $nivel=3;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?> 
                  <!--...hasta aqui-->
                  </div>
<!--Cuarto Nivel-->                    
                  <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#cuarto')">
                      <h6 class="m-0 font-weight-bold text-primary">Cuarto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->                  
                      </a>
                    </nav>
                  </div>
                  <div class="card-body" id="cuarto" hidden="true">
                    <?php   $nivel=4;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?> 
                  </div>
<!--Quinto Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#quinto')">
                      <h6 class="m-0 font-weight-bold text-primary">Quinto nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                    <div class="card-body" id="quinto" hidden="true">
                    <?php   $nivel=5;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?>
                    </div>
<!--Sexto Nivel-->                    
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#sexto')">
                      <h6 class="m-0 font-weight-bold text-primary">Sexto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                      </a>
                    </nav>
                </div>
                <div class="card-body" id="sexto" hidden="true">
                    <?php   $nivel=6;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?>
                </div>               
<!--Septimo Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#septimo')">
                      <h6 class="m-0 font-weight-bold text-primary">S&eacute;ptimo nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                  <div class="card-body" id="septimo" hidden="true">
                    <?php   $nivel=7;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                  mysqli_free_result($res);?>
                  </div>
<!--Octavo Nivel-->                    
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#octavo')">
                      <h6 class="m-0 font-weight-bold text-primary">Octavo nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                      </a>
                    </nav>
                </div>
                <div class="card-body" id="octavo" hidden="true">
                    <?php   $nivel=8;
                    $sql = "select * from `materia` where Nivel='".$nivel."'"; //esta es una tabla q contiene un listado de titulos principales
                    $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                    $i=0;
                    while($row = mysqli_fetch_assoc($res)){
                      $title[$i]=$row["Materia"];
                      $codtit[$i]=$row["Id_materia"];?>
                      <?php $sqlx = "select * from materia where Id_materia='".$codtit[$i]."'";
                      $resx=mysqli_query($conn, $sqlx) or die(mysql_error());
                      $j=0;
                      $cero=0;
                      while($rowx = mysqli_fetch_assoc($resx)){
                        $item[$j]=$rowx["Materia"];
                        $coditem[$j]=$rowx["Id_materia"];?>
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="<?php echo $item[$j];?>" name="checkbox" onClick="informarItemsElegidos('checkbox')">           <!--// asignamos el codigo de item-->
                          <label class="custom-control-label" for="<?php echo $item[$j];?>"><nbsp></nbsp><h6><?php echo $item[$j];?> <!-- imprimimos el nombre del item--></h6><br   /></label>
                        </div>
                        <?php $j++;
                      }
                    mysqli_free_result($resx);  ?> <!-- se libera la consulta-->
                    <?php $i++;
                    }
                mysqli_free_result($res);?>
                </div>
                  
              </div>
            </div>
          </div>

  <script src="../js/JSmaterias.js"></script>
</div>
</div>
<?php $conn->close();?>