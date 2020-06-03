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
            <div class="col-sm-9">
              <h1 class="h3 mb-2 text-gray-800">Agregar Unidad de Aprendizaje</h1><br>
            </div>
            <div class="col-sm-3">
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
                            <h1 class="h4 text-gray-900 mb-4">Unidad de Aprendizaje</h1>
                          </div>
                          <form class="user" method="POST" id="formAgregarMateria" >
                                <input name="func" type="hidden" value="AgregarMateria">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user" name="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user" name="nivel" placeholder="Nivel / Semestre">
                                </div>

                                <input type="submit" value="Agregar Materia" class="btn btn-success btn-user btn-block">
                          </form>

                        </div>
                      </div>
                      <div class="col-lg-3"></div>
                    </div>

                </div>
              </div>
            </div>
<script src="../js/AdminJS/AgregarMateriaJS.js"></script>
