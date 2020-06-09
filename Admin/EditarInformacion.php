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
              <h1 class="h3 mb-2 text-gray-800">Editar Informacion</h1>
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
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Perfil</h1>
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
                              <label class="h5 mb-0 font-weight-bold text-gray-800">Fecha de Creacion de Cuenta:  </label>
                            </div>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Perfil</h1>
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
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Confirm Password">
                            </div>

                            <a href="admin.php?page=UnidadesAprendizaje" class="btn btn-primary btn-user btn-block">
                              Guardar Datos
                            </a>

                          </form>

                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
