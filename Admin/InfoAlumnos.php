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
              <h1 class="h3 mb-2 text-gray-800">Alumnos</h1>
            </div>
            <div class="col-sm-1">
              <a href="admin.php?page=AgregarAlumno" class="btn btn-success">
                <i class="fas fa-user"></i>
                Agregar Alumno
              </a>

            </div>
            <div class="col-sm-1">
              <a href="#" class=" btn btn-primary ">
                <i class="fas fa-download  "></i>
                Generar Reporte
              </a>
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
                      <th>Age</th>
                      <th>Fecha de Creacion de Cuenta</th>
                      <th>Eliminar</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Boleta</th>
                      <th>Age</th>
                      <th>Fecha de Creacion de Cuenta</th>
                      <th>Eliminar</th>
                      <th>Editar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>
                        <a href="#" class="btn btn-danger btn-icon-split">
                          <span class="text">Eliminar</span>
                        </a>
                      </td>
                      <td>
                        <a href="admin.php?page=EditarAlumno&id=0" class="btn btn-primary btn-icon-split">
                          <span class="text">Editar</span>
                        </a>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
