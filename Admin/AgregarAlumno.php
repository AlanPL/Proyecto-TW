<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../LoginAdmin.html");
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
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Boleta">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Numero Telefonico">
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
<!--<script src="../js/AdminJS/AgregarAlumnoJS.js"></script>-->
