<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola mundo </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            padding-top: 3.5rem;
        }
        
        .form-group {
            margin-bottom: 0;
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"> Dark Shop </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr.auto">
                <li class="nav-item active">
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#">link1</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link disabled " href="#">link2</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="http://google.com.mx" class="nav-link dropdown-toggle" data-toggle="dorpdown"> Lista  </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Liga1</a>
                        <a href="#" class="dropdown-item">Liga2</a>
                        <a href="#" class="dropdown-item">Liga3</a>
                    </div>

                </li>
            </ul>
            <?php
            session_start();
            session_destroy();

            $autenticado=false;
                if(isset($_POST["ingresar"])){
                    $correo=$_POST["correo"];
                $password=$_POST["pass"];
                include"conexion.php";
                 
            }
            ?>
            <?php
            if(!$autenticado){

            ?>
            <form class="navbar-form navbar-right" role="form" action="login.php" method="post">
                <div class="form-group">
                    <input type="text" name="correo" placeholder="correo" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" placeholder="contraseña" class="form-control">
                </div>
                <button type="submit" name="ingresar" class="btn btn-success">ingresar</button>
            </form>
<?php
            }
            else{
                session_start();
                $_SESSION["login"]=$correo;
                header("Location:http://localhost/proyecto/index.php");
                die();
            }
            
            ?>
        </div>

    </nav>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="dispaly-3">Hola mundo!</h1>
                <p>Este template es para marketing simple o para un sitio web de informacion. Incluyendo una seccion grande llamada jumbotron y tres piezas de contenido.úsalo como un punto de partida para crea despúes algo único.
                </p>
                <p><a class="btn btn-primary btn-lg" href="registro.php"> Registrarse  </a></p>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>Este template es para marketing simple o para un sitio web de informacion. Incluyendo una seccion grande llamada jumbotron y tres piezas de contenido.úsalo como un punto de partida para crea despúes algo único.</p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>Este template es para marketing simple o para un sitio web de informacion. Incluyendo una seccion grande llamada jumbotron y tres piezas de contenido.úsalo como un punto de partida para crea despúes algo único.</p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>Este template es para marketing simple o para un sitio web de informacion. Incluyendo una seccion grande llamada jumbotron y tres piezas de contenido.úsalo como un punto de partida para crea despúes algo único.</p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>

            </div>
        </div>

    </main>
    <footer class="container">
        <p>&copy;Dark Shop Company</p>
    </footer>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>