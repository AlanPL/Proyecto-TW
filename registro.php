<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="confirm/jquery-confirm.min.css" rel="stylesheet">
</head>

<body class="imagen">
   <header id="main-header">
		
		<a id="logo-header" href="index.php">
			<span class="site-name">PRE-REGISTRO ESCOM</span>
			<span class="site-desc">REGISTRO</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto modal-content">
                <form id="form1" method="post" autocomplete="off">
                  <br>
                   <label for="boleta">Boleta</label>
                    <input type="text" name="boleta" id="boleta" placeholder="Inserta aqui tu boleta" class="form-control">
                    <br>
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Inserta aqui tu nombre(s)" class="form-control">
                    <br>
                    <label for="primerApe">Apellido Paterno</label>
                    <input type="text" name="primerApe" id="primerApe" placeholder="Inserta tu apellido paterno" class="form-control">
                    <br>
                    <label for="segundoApe">Apellido Materno</label>
                    <input type="text" name="segundoApe" id="segundoApe" placeholder="Inserta tu apellido materno" class="form-control">
                    <br>
                    <label for="correo">Correo electronico</label>
                    <input type="text" name="correo" id="correo" placeholder="Inserta aqui tu email" class="form-control">
                    <br>
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="date" name="fechaNac" id="fechaNac" placeholder="Inserta aqui tu fecha de nacimiento" class="form-control">
                    <br>
                    <label for="contrasena">Contraseña</label>
                    <input type="text" name="contrasena" id="contrasena" placeholder="Escribe tu contrasenia" class="form-control">
                    <br>
                    <input type="submit" value="Registrar" id="registrar" class="btn btn-info btn-block">
                </form>
                <br>
                <!--<button type="submit" class="btn btn-warning btn-block" id="regresar" href=>Regresar al inicio</button>-->
                <a href="index.php" class="btn btn-warning btn-block" id="regresar">Regresar al inicio</a>
            </div>
            
        </div>
    </div>
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="js/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="confirm/jquery-confirm.min.js"></script>
    <script src="js/registro.js"></script>
    <!--<script src="js/registro_datos.js"></script>-->
    
</body>
</html>
