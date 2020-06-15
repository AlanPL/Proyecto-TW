<?php
  if (!isset($_SESSION)) {
    session_start();
    include '../php/conexion.php';
    include 'ElegirNivel.php';
    $conn=conectar();
    $correo=$_SESSION["correo"];
  }
  if( !isset($_SESSION["correo"])){
    header("location:../login.php");
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

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Inicio</h6>
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
