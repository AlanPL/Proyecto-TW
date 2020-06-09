<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../login.html");
    }
?>
          <!-- Page Heading -->
          <div class="row mb-4">
            <div class="col-sm-10">
              <h1 class="h3 mb-2 text-gray-800">Agregar Alumno</h1>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1">
            </div>

          </div>

          <div class="card shadow mb-4">

              <div class="col-sm-12">

                  <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Alumno</h1>
                          </div>
                          <form class="user" method="POST" id="formAgregarAlumno" >
                                <input name="func" type="hidden" value="AgregarAlumno">
                               <div class="form-group">
                                   <input type="text" name="boleta" class="form-control form-control-user"  placeholder="Boleta">
                               </div>
                                <div class="form-group">
                                  <input type="text" name="nombre" class="form-control form-control-user"  placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="apellido_1" class="form-control form-control-user"  placeholder="Apellido Paterno">
                                </div>
                                <div class="form-group">
                                  <input type="text" name="apellido_2" class="form-control form-control-user"  placeholder="Apellido Materno">
                                </div>
                                <div class="form-group">
                                  <input type="email" name="correo" class="form-control form-control-user"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                  <input type="password" name="contrasenia" class="form-control form-control-user"  placeholder="Contraseña">
                                </div>

                                <input type="submit" value="Agregar Alumno" class="btn btn-success btn-user btn-block">

                          </form>

                        </div>
                      </div>
                      <div class="col-lg-3"></div>
                    </div>

                </div>
              </div>
            </div>
<script src="../js/AdminJS/AgregarAlumnoJS.js"></script>
