<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../login.html");
    }
?>
<script src="../js/html2pdf.bundle.min.js"></script>
<script src="../js/AdminJS/generadorReporte.js"></script>
<div id="reporteAlumnos">


          <!-- Page Heading -->
          <div class="row mb-4">
            <div class="col-sm-10">
              <h1 class="h3 mb-2 text-gray-800">Alumnos</h1>
            </div>
            <div class="col-sm-1">
              <button id="agregarAlumnoBtn" class="btn btn-success">
                <i class="fas fa-user"></i>
                Agregar Alumno
            </button>

            </div>
            <div class="col-sm-1">
              <button class=" btn btn-primary " id="descargarReporteAlumnos">
                <i class="fas fa-download  "></i>
                Generar Reporte
            </button>
            </div>

          </div>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informacion de Alumnos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Boleta</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Correo</th>
                      <th>Fecha de Creacion de Cuenta</th>
                      <th>Estado</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>

                  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Boleta</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Correo</th>
                        <th>Fecha de Creacion de Cuenta</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                  </tfoot>
                  <tbody id="alumnoInfo">

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="modal fade" id="DeleteAlumnoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar <span id="uaName"></span></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">¿Esta seguro que quiere eliminar al Alumno?</div>
                <div class="modal-footer">
                    <input id="boletaAlumno" type="hidden" value="">
                  <button class="btn btn-secondary" id="cancelBtn" type="button" data-dismiss="modal">Cancel</button>
                  <button type="button"  id="deleteAlumnoBtn" class="btn btn-danger" >Aceptar</a>
                </div>
              </div>
            </div>
          </div>
</div>
          <script>
              $("#agregarAlumnoBtn").click(function(){
                   $( "#adminContent" ).load( "AgregarAlumno.php",function(){}).hide().fadeIn();
              })

          </script>
<script src="../js/AdminJS/InfoAlumnosJS.js"></script>
