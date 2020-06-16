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
<script src="../js/AlumnoJS/ReporteAl.js"></script>

        <!-- Begin Page Content -->
        <div id="reporteMaterias">
<div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-5"></div>
          <div class="col-lg-3"></div>
      </div>
      <br><br>
      <!-- Illustrations -->
      <?php
        if(verificarExistencia($correo,$conn)!=0){
        echo "<div class='card shadow mb-4'>
         <div class='card-header py-3'>
         <h6 class='m-0 font-weight-bold text-primary'>Registro completado</h6>
         </div>
         <div class='card-body'>
          <div class='row'>
            <div class='col-lg-6'>
              <p>Gracias por tomarte el tiempo de llenar el registro.</p>
            </div>
            <div class='col-lg-3'></div>
            <div class='col-lg-3'>
              <form action='PDFAl.php' target='_blank'>
                <button class='btn btn-warning' id=´'reportePDF'>
                  <i class='fas fa-download'></i> Generar Reporte
                </button>
              </form>
            </div>
          </div><br>
          <div class='text-center'>
          <table class='table table-bordered' id='dataTable' width='100%'' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>Materia</th>
                      <th>Nivel</th>
                    </tr>
                  </thead>
                  <tbody id='infoMaterias'>";
              $sql = "select * from `alumno` where correo='".$correo."'"; //esta es una tabla q contiene un listado de titulos principales
              $res=mysqli_query($conn,$sql) or die(mysql_error()); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
              $row = mysqli_fetch_assoc($res);
              $boleta=$row["boleta"];
        echo "<input name='boleta' type='hidden' value='<?php echo $boleta;?>'>
                  </tbody>
                  </table>
          </div>

        </div>
          </div>";
      }else{
        echo  "<div class='card shadow mb-4'>
          <div class='card-header py-3'>
          <h6 class='m-0 font-weight-bold text-primary'>Tienes que llenar el registro</h6>
          <div class='card-body'>
          <div class='text-center'>
          <img class='img-fluid px-3 px-sm-4 mt-3 mb-4' style='width: 25rem;'' src='../img/undraw_fill_forms_yltj.svg' alt=''>
          </div>
          <p>En el costado izquierdo ver&aacute;s la opci&oacute;n 'Empezar lista', donde podr&aacute;s empezar tu lista</p>
        </div>
        </div>
      </div>";
         } ?>
    </div>
  </div>
</div>
</div>
<script src="../js/AlumnoJS/InfoMateriasElegidas.js"></script>
