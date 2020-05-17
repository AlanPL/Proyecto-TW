
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          
                      <script type="text/javascript">
            
                          
                          
            </script>
          
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Materias</h1>
          </div>
              <p>Selecciona las materias que te interesen meter para el próximo semestre, recuerda que solo puedes inscribir un máximo de 7 materias</p>
           <div class="row">
            <div class="col-lg-4">
               <form name="formulario2">
                    <h4>Materias seleccionadas: <input type="text" id="cajaTexto" class="texto" value="0" > / 7</h4>
                
            <!--<div class="progress mb-4">
                <div class="progress-bar" id="progreso" role="progressbar" style="width:25" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
                
          </div>-->
                    </form></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form name="formulario3">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ConfirmacionRegistro">
                    <button href="#" id="boton"  class="btn btn-success btn-icon-split" disabled>
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text" data-toggle="modal" data-target="#ConfirmacionRegistro">Enviar Registro</span>
                  </button></a></form>
            </div>
            </div>

                          <!-- Envio de Registro-->
  <div class="modal fade" id="ConfirmacionRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Todo listo?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" align="center">Esta acci&oacute;n no se puede deshacer<br>¿Seguro que ya acabaste?</div>
          
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="registro_completo.php">S&iacute;, enviar</a>
        </div>
      </div>
    </div>
  </div>
            
              <div class="card shadow mb-4">
                  
<!--Primer Nivel-->
                <div class="card-header py-3">
                    <nav class="navbar navbar-expand navbar-light bg-light">
                        <h6 class="m-0 font-weight-bold text-primary">Primer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#primero')"><!--Titulo opcional para el dropdown-->
                        </a>
                    </nav>
                </div>
                 <form name="formulario" method="post" action="">
                    <div class="card-body" id="primero" hidden="true">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">          
                                    <input type="checkbox" class="custom-control-input" id="MatDis" name="checkbox1" onClick="validar(formulario.checkbox1,0)">
                                    <label class="custom-control-label" for="MatDis">Matem&aacute;ticas discretas</label><br><br>
                               </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="AnVect" name="checkbox2" onClick="validar(checkbox2,0)">    
                                    <label class="custom-control-label" for="AnVect">An&aacute;lisis vectorial</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Calculo" name="checkbox3" onClick="validar(checkbox3,0)">
                                    <label class="custom-control-label" for="Calculo">C&aacute;lculo</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Algoritmia" name="checkbox4" onClick="validar(checkbox4,0)">
                                    <label class="custom-control-label" for="Algoritmia">Algoritmia y programaci&oacute;n estructurada</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="Fisica" name="checkbox5" onClick="validar(checkbox5,0)">    
                                    <label class="custom-control-label" for="Fisica">F&iacute;sica</label><br><br>
                                </div><div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="IngEt" name="checkbox6" onClick="validar(checkbox6,0)">
                                    <label class="custom-control-label" for="IngEt">Ingenier&iacute;a &eacute;tica y sociedad</label>
                                </div>
                        </div>   
                  </div>
<!--Segundo Nivel-->                    
                  <div class="card-header py-3">
                      <nav class="navbar navbar-expand navbar-light bg-light">
                  <h6 class="m-0 font-weight-bold text-primary">Segundo nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#segundo')"><!--Titulo opcional para el dropdown-->
                      </a>
                      </nav>
                </div>
                <div class="card-body" id="segundo" hidden="true">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">          
                            <input type="checkbox" class="custom-control-input" id="EcDif" name="checkbox7" onClick="validar(formulario.checkbox7,0)">
                            <label class="custom-control-label" for="EcDif">Ecuaciones Diferenciales</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="AlgLin" name="checkbox8" onClick="validar(checkbox8,0)">    
                            <label class="custom-control-label" for="AlgLin">&Aacute;lgebra lineal</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="CalcApl" name="checkbox9" onClick="validar(checkbox9,0)">
                            <label class="custom-control-label" for="CalcApl">C&aacute;lculo aplicado</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="EstrDat" name="checkbox10" onClick="validar(checkbox10,0)">
                            <label class="custom-control-label" for="EstrDat">Estructura de datos</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="ComOral" name="checkbox11" onClick="validar(checkbox11,0)">    
                            <label class="custom-control-label" for="ComOral">Comunicaci&oacute;n oral y escrita</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="Circuitos" name="checkbox12" onClick="validar(checkbox12,0)">
                            <label class="custom-control-label" for="Circuitos">An&aacute;lisis fundamental de circuitos</label>
                        </div>
                    </div>  
                </div>
                  
<!--Tercer Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light">
                      <h6 class="m-0 font-weight-bold text-primary">Tercer nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#tercero')"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                    <div class="card-body" id="tercero" hidden="true">
                                            <div class="form-group">
                        <div class="custom-control custom-checkbox small">          
                            <input type="checkbox" class="custom-control-input" id="MatAV" name="checkbox13" onClick="validar(formulario.checkbox13,0)">
                            <label class="custom-control-label" for="MatAV">Matem&aacute;ticas avanzadas para la ingenier&iacute;a</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="FundEc" name="checkbox14" onClick="validar(checkbox14,0)">    
                            <label class="custom-control-label" for="FundEc">Fundamentos econ&oacute;micos</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="FundDD" name="checkbox15" onClick="validar(checkbox15,0)">
                            <label class="custom-control-label" for="FundDD">Fundamentos de dise&ntilde;o digital</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="TeorComp" name="checkbox16" onClick="validar(checkbox16,0)">
                            <label class="custom-control-label" for="TeorComp">Teor&iacute;a computacional</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="BD" name="checkbox17" onClick="validar(checkbox17,0)">    
                            <label class="custom-control-label" for="BD">Base de datos</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="POO" name="checkbox18" onClick="validar(checkbox18,0)">
                            <label class="custom-control-label" for="POO">Programaci&oacute;n orientada a objetos</label><br><br>
                        </div><div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="ElecAn" name="checkbox19" onClick="validar(checkbox19,0)">
                            <label class="custom-control-label" for="ElecAn">Electr&oacute;nica anal&oacute;gica</label>
                        </div>
                    </div> 
                    </div>
<!--Cuarto Nivel-->                    
                  <div class="card-header py-3">
                      <nav class="navbar navbar-expand navbar-light bg-light">
                  <h6 class="m-0 font-weight-bold text-primary">Cuarto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#cuarto')"><!--Titulo opcional para el dropdown-->
                      </a>
                      </nav>
                </div>
                <div class="card-body" id="cuarto" hidden="true">

                  </div>
                  
<!--Quinto Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light">
                      <h6 class="m-0 font-weight-bold text-primary">Quinto nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#quinto')"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                    <div class="card-body" id="quinto" hidden="true">
                        <input type="checkbox" class="custom-checkbox">dsa
                    </div>
<!--Sexto Nivel-->                    
                  <div class="card-header py-3">
                      <nav class="navbar navbar-expand navbar-light bg-light">
                  <h6 class="m-0 font-weight-bold text-primary">Sexto nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#sexto')"><!--Titulo opcional para el dropdown-->
                      </a>
                      </nav>
                </div>
                <div class="card-body" id="sexto" hidden="true">
                  <p>Bienvenido Nombre de usuario</p>
                </div>
                  
<!--Septimo Nivel-->
                <div class="card-header py-3">
                   <nav class="navbar navbar-expand navbar-light bg-light">
                      <h6 class="m-0 font-weight-bold text-primary">S&eacute;ptimo nivel</h6> 
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#septimo')"><!--Titulo opcional para el dropdown-->
                        </a>
                  </nav>
                  </div>
                    <div class="card-body" id="septimo" hidden="true">
                        <p>Bienvenido Nombre de usuario</p>
                    </div>
<!--Octavo Nivel-->                    
                  <div class="card-header py-3">
                      <nav class="navbar navbar-expand navbar-light bg-light">
                  <h6 class="m-0 font-weight-bold text-primary">Octavo nivel</h6>
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" onClick="toggleHidden('#octavo')"><!--Titulo opcional para el dropdown-->
                      </a>
                      </nav>
                </div>
                </form>
                <div class="card-body" id="octavo" hidden="true">
                  <p>Bienvenido Nombre de usuario</p>
                </div>
                  
              </div>
            </div>
          </div>

  <script src="js/JSmaterias.js"></script>
</div>
</div>