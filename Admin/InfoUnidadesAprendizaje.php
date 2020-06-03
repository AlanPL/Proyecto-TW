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
              <h1 class="h3 mb-2 text-gray-800">Unidades de Aprendizaje</h1>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1">
              <a href="admin.php?page=AgregarMateria" class="btn btn-success">
                <i class="fas fa-user"></i>
                Agregar UA
              </a>
            </div>

          </div>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informacion de Unidades De Aprendizaje</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Nivel</th>
                      <th style="width: 10%;">Editar</th>
                      <th style="width: 10%;">Eliminar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Nivel</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                  <tbody id="uaInfo">

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="modal fade" id="DeleteUAModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar <span id="uaName"></span></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">¿Esta seguro que quiere eliminar la Unidad de Aprendizaje?</div>
                <div class="modal-footer">
                    <input id="UAid" type="hidden" value="">
                  <button class="btn btn-secondary" id="cancelBtn" type="button" data-dismiss="modal">Cancel</button>
                  <button type="button"  id="deleteUABtn" class="btn btn-danger" >Aceptar</a>
                </div>
              </div>
            </div>
          </div>
<script src="../js/AdminJS/InfoUAJS.js"></script>
