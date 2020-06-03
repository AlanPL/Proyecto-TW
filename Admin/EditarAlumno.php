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
                            <h1 class="h4 text-gray-900 mb-4">Alumno <?php echo $_GET["id"] ?></h1>
                          </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Nombre: </label>
                            </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Boleta: </label>
                            </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Email:  </label>
                            </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Numero Telefonico:  </label>
                            </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Fecha de Creacion de Cuenta:  </label>
                            </div>
                            <div class="form-group">
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Unidades de Aprendizaje Seleccionadas</label>
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
                            <h1 class="h4 text-gray-900 mb-4">Alumno <?php echo $_GET["id"] ?></h1>
                          </div>
                          <form class="user">
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

                            <a href="admin.php?page=InfoAlumnos" class="btn btn-primary btn-user btn-block">
                              Guardar Datos
                            </a>

                          </form>

                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
