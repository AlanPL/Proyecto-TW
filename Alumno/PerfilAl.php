<?php session_start();
      include 'ElegirNivel.php';
      include '../php/conexion.php';
      $conn=conectar();
      $correo=$_SESSION["correo"];
?>
  <!-- Page Wrapper -->
  <div id="wrapper">

<!--Carrera, Boleta, materias ya cursadas, -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
          </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 border-left-secondary">
                    <div class="card-body">
                        Nombre:<br>
                        <h4 align="right"><?php conseguirNombre($correo,$conn);?></h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                  <div class="card mb-4 border-left-warning">
                      <div class="card-body">
                          Boleta:<br>
                          <h4 align="right"><?php conseguirBoleta($correo,$conn);?></h4>
                      </div>
                  </div>
               </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                  <form class="user" id="formEditarCorreoAl" method="POST" >
                    <input name="func" type="hidden" value="EditarCorreoAl">
                          <?php $sql = "select * from `alumno` where correo='".$correo."'"; //esta es una tabla q contiene un listado de titulos principales
                          $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                          $row = mysqli_fetch_assoc($res);
                          $boleta=$row["boleta"];
                          ?>
                  <input name="boletaAlumno" type="hidden" value="<?php echo $boleta;?>">
                  <div class="card mb-4 border-left-info">
                    <div class="card-body">
                      Correo:<br>
                        <h4 align="right"><?php echo $correo;?></h4>
                        <nav class="navbar-expand navbar-light" onClick="toggleHidden('#correo')">
                          <a href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                          </a>
                        </nav>
                      <div class="card-body" id="correo" hidden="true">
                        <input type="email" class="form-control form-control-user" name="CorreoNuevo" placeholder="Correo nuevo">
                        <br>
                        <input type="submit" value="Guardar Cambios" id="EditarCorreoBtn" class="btn btn-warning btn-user"><br><br>
                        <h6 class="text-gray-500">*Una vez oprimido el bot&oacute;n, se cerrar&aacute; la sesi&oacute;n para efectuar los cambios</h6>
                      </div>
                    </div>
                  </div> 
                </form>
               </div>

              <div class="col-lg-6">
                <form class="user" id="formEditarContrasenaAl" method="POST" >
                  <input name="func" type="hidden" value="EditarContrasenaAl">
                          <?php $sql = "select * from `alumno` where correo='".$correo."'"; //esta es una tabla q contiene un listado de titulos principales
                          $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
                          $row = mysqli_fetch_assoc($res);
                          $boleta=$row["boleta"];
                          ?>
                  <input name="boletaAlumno" type="hidden" value="<?php echo $boleta;?>">
                  <div class="card mb-4 border-left-primary">
                    <div class="card-body">
                      Contrase&ntilde;a:<br>
                        <h4 align="right"><?php conseguirContrasena($correo,$conn);?></h4>
                        <nav class="navbar-expand navbar-light" onClick="toggleHidden('#contrasena')">
                          <a href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                          </a>
                        </nav>
                      <div class="card-body" id="contrasena" hidden="true">
                        <input type="password" class="form-control form-control-user" name="ContrasenaNueva" placeholder="Contrase&ntilde;a nueva">
                        <br>
                        <input type="submit" value="Guardar Cambios" id="EditarContrasenaBtn" class="btn btn-warning btn-user">
                      </div>
                    </div>
                  </div> 
                </form> 
              </div>      
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>
<script src="../js/JSmaterias.js"></script>
<script src="../js/AlumnoJS/EditarDatosAl.js"></script>
<script src="../js/AlumnoJS/EditarCorreoAl.js"></script>