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
                <div class="col-md-2">
                    <h2>Beads Bracelet try</h2>
                    <img src="img/dark1.jpg" alt="">  
                    <p><strong>Brazalete del cuero con tiras en chaquira y detalles en metal trigular, ajustable, colores negro gris y plata.</strong></p>  
                    <p>MXN$150</p>                
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                    </p>
                </div>
                <div class="col-md-2">
                        <h2>Leather Brac Dobtry</h2>
                        <img src="img/dark2.jpg" alt="">
                        <p><strong>Brazalete 7cm de ancho en cuero color negro con detalle de metal y tiras de cuero, estoperoles al reverso</strong></p>
                        <p>MXN$160</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-2">
                            <h2>Beads Bracelet circle</h2>
                            <img src="img/dark3.jpg" alt="">
                            <p><strong>Brazalete edicion circle cuero negro y detalle en plata, ancho de 10cm</strong></p>
                            <p>MXN$200</p>
                            <p>
                                <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                            </p>
                        </div>
                        <div class="col-md-2">
                                <h2>Bracelet doblok</h2>
                                <img src="img/dark4.jpg" alt="">
                                <p><strong>Brazalete cuero estilo rocker en cierre de metal y detalles en plata, punto con estoperol disponible solo en negro</strong></p>
                                <p>MXN$180</p>
                                <p>
                                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                                </p>
                            </div>
                            <div class="col-md-2">
                                    <h2>Bracelet chakir</h2>
                                    <img src="img/dark5.jpg" alt="">
                                    <p><strong>Brazalete borde cierre, cuero color negro detalles en arreglos gris y plata, ancho 7cm</strong></p>
                                    <p>MXN$350</p>
                                    <p>
                                        <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                        <h2>Bracelet Metaldrop</h2>
                                        <img src="img/dark6.jpg" alt="">
                                        <p><strong>Brazalete metal en color plata con detalles en cuero negro y arreglos en negro y gris, ajustable ancho de 7cm</strong></p>
                                        <p>MXN$250</p>
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