  <!-- Page Wrapper -->
  <div id="wrapper">

<!--Carrera, Boleta, materias ya cursadas, -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
          </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 border-left-primary">
                    <div class="card-body">
                        Nombre:<br>
                        <h4 align="right"><?php conseguirNombre($correo,$conn);?></h4>
                  <a href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></a>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <div class="card mb-4 border-left-success">
                        <div class="card-body">
                            Materias cursadas:<br>
                        <h4 align="right">18</h4>
                        <a href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 border-left-warning">
                    <div class="card-body">
                        Boleta:<br>
                        <h4 align="right"><?php conseguirBoleta($correo,$conn);?></h4>
                  <a href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></a>
                    </div>
                </div>
            </div>
          </div>        
        </div>
    </div>
</div>
</div>
