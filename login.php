<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="confirm/jquery-confirm.min.css" rel="stylesheet">
</head>

<body class="imagen">
    <header id="main-header">

        <a id="logo-header" href="index.php">
            <span class="site-name">PRE-REGISTRO ESCOM</span>
            <span class="site-desc">Iniciar sesion</span>
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
                <form  id="form1" autocomplete="off" method="post">
                  <br>
                   <label for="boleta">Boleta</label>
                    <input type="text" name="boleta" id="boleta" placeholder="Inserta aqui tu boleta" class="form-control">
                    <br>
                    <label for="contrasena">Contraseña</label>
                    <input type="text" name="contrasena" id="contrasena" placeholder="Escribe tu contrasenia" class="form-control">
                    <br>
                    <input type="submit" value="Entrar" class="btn btn-info btn-block">
                </form>
                <br>
                
            </div>
            <!--<button type="button" href="index.html" class="btn btn-warning btn-block" id="regresar">Regresar al inicio</button>-->
            <a href="index.php" class="btn btn-warning btn-block" id="regresar">Regresar al inicio</a>
        </div>
    </div>
    
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="js/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="confirm/jquery-confirm.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
