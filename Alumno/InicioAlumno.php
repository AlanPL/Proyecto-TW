<?php
  if (!isset($_SESSION)) {
    session_start();
    include '../php/conexion.php';
    include 'ElegirNivel.php';
    $conn=conectar();
    $correo=$_SESSION["correo"];
  }
  if( !isset($_SESSION["correo"])){
    header("location:../login.html");
  }
?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
          </div>

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Bienvenido <?php conseguirNombre($correo,$conn); ?></p>
                </div>
              </div>
            </div>
          </div>
</div>
</div>