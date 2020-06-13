<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if( !isset($_SESSION["correo"])){
        header("location:../login.html");
    }
?>
<!-- Page level plugins -->
<script src="../vendor/chart.js/Chart.js"></script>
<script src="../js/demo/chart-pie-demo.js"></script>
<script src="../js/html2pdf.bundle.min.js"></script>
<script src="../js/AdminJS/generadorReporte.js"></script>

<div id="reporteEstadisticas">


    <!-- Page Heading -->
    <div class="row mb-4">
      <div class="col-sm-10">
        <h1 class="h3 mb-2 text-gray-800">Estadisticas</h1>
      </div>
      <div class="col-sm-1"></div>

      <div class="col-sm-1">
        <button class=" btn btn-primary " id="descargarReporte">
          <i class="fas fa-download  "></i>
          Generar Reporte
      </button>
      </div>

    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Alumnos Registrados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="numAlumnos"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Materias Registradas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="numMaterias"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Porcentaje de alumnos que han completado la encuesta</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Porcentaje De Solicitud Por Semestre</h6>
                </div>
                <div class="card-body">

                    <h4 class="medium font-weight-bold">Segundo Semestre <span id="solicitudesSem2" class="small"></span> <span class="float-right" id="percentage2">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" id="percentageBar2"  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="medium font-weight-bold">Tercer Semestre <span id="solicitudesSem3" class="small"></span> <span class="float-right" id="percentage3">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" id="percentageBar3" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="medium font-weight-bold">Cuarto Semestre <span id="solicitudesSem4" class="small"></span> <span class="float-right" id="percentage4">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" id="percentageBar4" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="medium font-weight-bold">Quinto Semestre <span id="solicitudesSem5" class="small"></span> <span class="float-right" id="percentage5">Complete!</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" id="percentageBar5" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="medium font-weight-bold">Sexto Semestre <span id="solicitudesSem6" class="small"></span> <span class="float-right" id="percentage6">100%</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" id="percentageBar6" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <hr>
<BR>
    <!-- Content Row -->
    <div class="row break-page" style="width: 100%">

        <div class="col-sm-12">
            <div id="accordion">
                <div class="card border-left-primary mb-4 col-md-12">
                    <div class="card-body " id="headingOne">
                        <span  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Segundo Semestre</div>
                        </span>
                    </div>
                    <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row" id="GraficasSemestre2">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-left-primary">
                    <div class="card-body " id="headingOne">
                        <span  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Tercer Semestre</div>
                        </span>
                    </div>
                    <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row" id="GraficasSemestre3">


                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-left-primary">
                    <div class="card-body " id="headingOne">
                        <span class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Cuarto Semestre</div>
                        </span>
                    </div>
                    <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row" id="GraficasSemestre4">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-left-success">
                    <div class="card-body " id="headingTwo">
                        <span class="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Quinto Semestre</div>
                        </span>
                    </div>
                    <div id="collapseTwo" class="" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row" id="GraficasSemestre5">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-left-success">
                    <div class="card-body " id="headingTwo">
                        <span class="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sexto Semestre</div>
                        </span>
                    </div>
                    <div id="collapseTwo" class="" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row" id="GraficasSemestre6">


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <hr>
</div>
<script src="../js/AdminJS/estadisticasAdmin.js"></script>
