<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dark Shop</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
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
        <a class="navbar-brand" id="t" href="index.php"><img src="img/darklogo.png" alt="">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr.auto">
                <li class="nav-item active">
                    <a class="nav-link " href="ofertas.php">Ofertas</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link " href="accesorios.php">Accesorios de temporada</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link " href="calzado.php">Calzado</a>
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
        </div>
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
                header("Location:http://localhost/Bootstrap/vip.php");
                die();
            }
            
            ?>
        </div>

    </nav>

    <div class="container" id="ca">
    <div class="row">
        <div class="col-md-5">
            <h1> <strong>Style christmas</strong></h1>
            <img src="img/vestido1.jpg" alt="">
            <p><strong>Vestido gamusa en color verde obscuro con bordado blanco estilo navideño gotico disponible en tallas X, M, L, XL</strong></p>
            <p>MXN$1050</p>
            <p>
                <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
            </p>
        </div>
        <div class="col-md-5">
                <h1> <strong>tripes and bow</strong></h1>
                <img src="img/vestido2.jpg" alt="">
                <p><strong>Vestido tirante grueso en rayas blanco y negro, con olan en fondo negro disponible en tallas X, L ,M, XL</strong></p>
                <p>MXN$499</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-5">
                <h1><strong>Dark Jack</strong></h1>
                <img src="img/vestido3.jpg" alt="">
                <p><strong>Vestido negro en rayas con media manga color negro y blanco estilo corset con plizado negro con fonde de Jack, disponible en tallas X, M, L, XL</strong></p>
                <p>MXN$520</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-5">
                <h1><strong>Gotic Campa</strong></h1>
                <img src="img/blusa1.jpg" alt="">
                <p><strong>Blusa manga larga campana color negro con cinta hasta los hombros disponible tambien en color gris, tallas X, M, L, XL</strong></p>
                <p>MXN$99</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-5">
                <h1><strong>Gabardina Clasic</strong></h1>
                <img src="img/gabardina1.jpg" alt="">
                <p><strong>Gabardina tipo saco hasta 3/4 manga campana estilo corset en color negro y bordados gris, disponible en tallas X, M, L, XL </strong></p>
                <p>MXN$115</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-5">
                <h1><strong>FormalDark</strong></h1>
                <img src="img/sacos1.jpg" alt="">
                <p><strong>Saco estilo corset disponible en color negro, azul y crema, 6 botones con repuesto disponible en tallas X, M, L, XL</strong></p>
                <p>MXN$105</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-5">
                <h1><strong>Cat Lover</strong></h1>
                <img src="img/sueter2.jpg" alt="">
                <p><strong>Sueter color negro con bordado de gato gotic en color blanco manga grunge, disponible en tallas X, M , L</strong></p>
                <p>MXN$235</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>           
            <div class="col-md-5">
                <h1><strong>Simbol style</strong></h1>
                <img src="img/suerter2.jpg" alt="">
                <p><strong>Sueter color negro con estampado color blanco en simbolos 3/4 con capucha, disponible en tallas X, M , L </strong></p>
                <p>MXN$235</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
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