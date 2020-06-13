<?php
    session_start();

    if( !isset($_SESSION["correo"])){
        header("location:../login.html");
    }else{
        //La sesion existe SSI pasó por el login y los datos fueron correctos
        $correo = $_SESSION["correo"];
        //echo "<a href='./cerrarSesion.php?nombreSesion=boleta'>Cerrar Sesi&oacute;n</a>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administracion SEIIAE</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/notify.css" rel="stylesheet">
  <script src="../js/jquery-3.5.0.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/CSSAlumno.css" rel="stylesheet"><!--CSS personalizadas alumno-->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
        <?php include("sidebarAlumno.php"); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
            <?php include("topbarAl.php"); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid" id="ContenidoAlumno">
        </div>
        <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
<?php include("../Admin/footer.php"); ?>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Ya se va?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Quiere cerrar sei&oacute;n?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../php/cerrarSesion.php?nombreSesion=correo">Cerrar sesi&oacute;n</a>
        </div>
      </div>
    </div>
  </div>

<script src="../js/notify.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  <script src="../js/AlumnoJS/redireccionesAlumno.js"></script>
</body>
</html>