<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../login.html");
    }
    $message =$_POST["data"];
?>
          <!-- Page Heading -->
          <div class="row mb-4">
            <div class="col-sm-10">
              <h1 class="h3 mb-2 text-gray-800">Editar Informacion de Alumno</h1>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1">
              <a href="#" class=" btn btn-primary ">
                <i class="fas fa-download  "></i>
                Generar Reporte
              </a>
            </div>

          </div>

          <div class="card shadow mb-4">

              <div class="col-sm-12">

                  <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Materias Seleccionadas</h1>
                          </div>

                            <ul class="list-group">
                              <li class="list-group-item">Matematicas Avanzadas</li>
                              <li class="list-group-item">Probabilidad y Estadistica</li>
                              <li class="list-group-item">Redes De Computadoras</li>
                            </ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Informacion del Alumno </h1>
                          </div>
                          <form class="user" method="POST" id="formEditarAlumno" >
                                <input name="func" type="hidden" value="EditarAlumno">
                               <div class="form-group">
                                   <input type="text" name="boleta" class="form-control form-control-user"  placeholder="Boleta" value="<?php echo $message['boleta'] ?>">
                               </div>
                                <div class="form-group">
                                  <input type="text" name="nombre" class="form-control form-control-user"  placeholder="Nombre" value="<?php echo $message['nombre'] ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="apellido_1" class="form-control form-control-user"  placeholder="Apellido Paterno" value="<?php echo $message['primerApe'] ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="apellido_2" class="form-control form-control-user"  placeholder="Apellido Materno" value="<?php echo $message['segundoApe'] ?>">
                                </div>
                                <div class="form-group">
                                  <input type="email" name="correo" class="form-control form-control-user"  placeholder="Email" value="<?php echo $message['correo'] ?>">
                                </div>
                                <div class="form-group">
                                  <input type="password" name="contrasenia" class="form-control form-control-user"  placeholder="Contraseña" value="<?php echo $message['contrasena'] ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="estado" class="form-control form-control-user"  placeholder="Estado" value="<?php echo $message['estado'] ?>">
                                </div>

                                <input type="submit" value="Guardar Datos" class="btn btn-primary btn-user btn-block">

                          </form>

                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
<script src="../js/AdminJS/EditarAlumnoJS.js"></script>
