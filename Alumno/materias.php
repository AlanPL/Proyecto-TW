
<div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">         
      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Materias</h1>
        </div>
        <p>Selecciona las materias que te interesen meter para el próximo semestre, recuerda que solo puedes inscribir un máximo de 7 materias</p>
        <div class="row">
          <div class="col-lg-4">
            <form name="formulario2">
              <h4>Materias seleccionadas: <input type="text" id="cajaTexto" class="texto" value="0" > / 7</h4>        
            </form>
          </div>
          <div class="col-lg-4"></div>
          <form name="formulario3">
            <div class="col-lg-4">
              <input type="submit" id="boton" name="boton" value="Registrar Materias" class="btn btn-success btn-user" onClick="envioMateria()" disabled>
          </form>
        </div>
        <div class="card shadow mb-4">
                  
<!--Primer Nivel-->
          <div class="card-header py-3">
              <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#primero')">
                        <h6 class="m-0 font-weight-bold text-primary">Primer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                    </nav>
                </div>
                 <form name="formulario" method="post" action="">
                    <div class="card-body" id="primero" hidden="true">
                   <?php ElegirNivel(1,$conn); ?>
                  </div>
<!--Segundo Nivel-->      
                <div class="card-header py-3">
                  <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#segundo')">
                    <h6 class="m-0 font-weight-bold text-primary" >Segundo nivel</h6>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                    </a>
                    </nav>
                </div>
                <div class="card-body" id="segundo" hidden="true">
                    <?php  ElegirNivel(2,$conn);    ?>  
                </div>                 
<!--Tercer Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#tercero')">
                      <h6 class="m-0 font-weight-bold text-primary">Tercer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown--> 
                        </a>
                  </nav>
                  </div>
                  <div class="card-body" id="tercero" hidden="true">
                    <?php  ElegirNivel(3,$conn);    ?>
                  </div>
<!--Cuarto Nivel-->                    
                  <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#cuarto')">
                      <h6 class="m-0 font-weight-bold text-primary">Cuarto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->                  
                      </a>
                    </nav>
                  </div>
                  <div class="card-body" id="cuarto" hidden="true">
                    <?php  ElegirNivel(4,$conn);    ?> 
                  </div>
<!--Quinto Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#quinto')">
                      <h6 class="m-0 font-weight-bold text-primary">Quinto nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                    <div class="card-body" id="quinto" hidden="true">
                    <?php  ElegirNivel(5,$conn);    ?>
                    </div>
<!--Sexto Nivel-->                    
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#sexto')">
                      <h6 class="m-0 font-weight-bold text-primary">Sexto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                      </a>
                    </nav>
                </div>
                <div class="card-body" id="sexto" hidden="true">
                    <?php  ElegirNivel(6,$conn);    ?>
                </div>               
<!--Septimo Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#septimo')">
                      <h6 class="m-0 font-weight-bold text-primary">S&eacute;ptimo nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                  <div class="card-body" id="septimo" hidden="true">
                    <?php  ElegirNivel(7,$conn);    ?>
                  </div>
<!--Octavo Nivel-->                    
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light" onClick="toggleHidden('#octavo')">
                      <h6 class="m-0 font-weight-bold text-primary">Octavo nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"><!--Titulo opcional para el dropdown-->
                      </a>
                    </nav>
                </div>
                <div class="card-body" id="octavo" hidden="true">
                    <?php  ElegirNivel(8,$conn);    ?>
                </div>
                  
              </div>
            </div>
          </div>

  <script src="../js/JSmaterias.js"></script>
  <script src="../js/RegistrarMaterias.js"></script>
</div>
</div>
<?php $conn->close();?>