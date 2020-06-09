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
            <div class="col-sm-9">
              <h1 class="h3 mb-2 text-gray-800">Editar Unidad de Aprendizaje</h1><br>
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
                          <?php


                          ?>

                          <form class="user" method="POST" id="formEditarMateria" >
                                <input name="func" type="hidden" value="EditarMateria">
                                <input name="id" type="hidden" value="<?php echo $message['Id_materia'] ?>">
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user" name="nombre" placeholder="Nombre" value="<?php echo $message['Nombre'] ?>" >
                                </div>

                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user" name="nivel" placeholder="Nivel / Semestre" value="<?php echo $message['Nivel'] ?>">
                                </div>

                                <button  value="Guardar Datos" class="btn btn-success btn-user btn-block">Guardar Datos</button>
                          </form>

                        </div>
                      </div>
                      <div class="col-lg-3"></div>
                    </div>

                </div>
              </div>
            </div>

<script src="../js/AdminJS/EditarMateriaJS.js"></script>
