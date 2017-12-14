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
                <div class="col-md-4">
                    <h1> <strong> Choes Punk 94</strong></h1>
                    <img src="img/zapatos1.jpg" alt="">
                    <p><strong>Zapatos edicion especial estilo 94 color negro con detalles blanco, plataforma 1.5 cm, Numero disponibles 2-8</strong></p>
                    <p>MXN$1,850</p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                    </p>
                </div>
                <div class="col-md-4">
                        <h1> <strong> Boots Stoperl</strong></h1>
                        <img src="img/botas1.jpg" alt="">
                        <p><strong>Botas estilo punk, edicion 2000 color negro con estoperoles y plataforma 10cm. Numeros disponibles 4-8</strong></p>
                        <p>MXN$1015</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong> Botin Cross </strong></h1>
                        <img src="img/botas2.jpg" alt="">
                        <p><strong>Botin cross estilo edicion especial, color negro con detalles en plata, tacon de 10cm. Numeros disponibles 3-7</strong></p>
                        <p>MXN$1100</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong>Plataform Boots</strong></h1>
                        <img src="img/botas3.jpg" alt="">
                        <p><strong>Botas tacon aguja 12cm, estilo rocket largo de 30cm en color negro de cuero. Numeros disponibles 3-7</strong></p>
                        <p>MXN$1200</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong>Cat black shous</strong></h1>
                        <img src="img/zapatos2.jpg" alt="">
                        <p><strong>Zapatos edicion especial Cat en color negro, material terciopelo con detalles bordados en blanco, plataforma de 5cm. Numero disponibles del 2-8</strong></p>
                        <p>MXN$999</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong>Black Velvet shoes</strong></h1>
                        <img src="img/zapatos3.png" alt="">
                        <p><strong>Zapatos estilo 70s dark collections en color negro en terciopelo grabado con plataforma de 5cm. Numeros disponibles 4-7</strong></p>
                        <p>MXN$1030</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong>Black Premium</strong></h1>
                        <img src="img/zapatos4.jpg" alt="">
                        <p><strong>Calzado estilo Black Premium cuero color negro, con plataforma y tacon de 10cm. Numeros disponibles 4-8</strong></p>
                        <p>MXN$1300</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong> Dark Grunge</strong></h1>
                        <img src="img/zapatos5.jpg" alt="">
                        <p><strong>Calzado estilo Dark Grunge collections color negro con plataforma de 7cm. Numeros disponibles 4-8</strong></p>
                        <p>MXN$1050</p>
                        <p>
                            <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h1><strong>Red Encaje</strong></h1>
                        <img src="img/zapatillasrojas.jpg" alt="">
                        <p><strong>Tacon aguja Red Encaje edicion ilimitada 15cm, colores disponibles en rojo, azul, morado y gris. Numeros disponibles 3-7</strong></p>
                        <p>MXN$1600</p>
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