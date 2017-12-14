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
            <h1> <strong>Gloves style 50s</strong></h1>
            <img src="img/guantes1.jpg" alt="">
            <p><strong>Guantes de encaje color negro con cintas grises y borde con olan negro, 20cm de largo</strong></p>
            <p>MXN$155</p>
            <p>
                <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
            </p>
        </div>
        <div class="col-md-4">
                <h1> <strong>PinkSuede Gloves</strong></h1>
                <img src="img/guantes2.jpg" alt="">
                <p><strong>Guantes de tercipelo color rosa disponible tambien en morado, con bordes en olan negro, ajustables con un largo de 17cm </strong></p>
                <p>MXN$139</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Full lace dark</strong></h1>
                <img src="img/guantes3.jpg" alt="">
                <p><strong>Guantes de total encaje con resorte en color negro con un largo de 17cm disponibles tambien en gris, rojo y morado</strong></p>
                <p>MXN$99</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Chokherat</strong></h1>
                <img src="img/choquer1.jpg" alt="">
                <p><strong>Choker color negro de gamusa con detalle en diamante plata y corazon en rojo, ajustable</strong></p>
                <p>MXN$99</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Choker Goticlok</strong></h1>
                <img src="img/choquer2.jpg" alt="">
                <p><strong>Choker style border negro con detalles en plata  diemante rojo(disponible tambien en morado y azul) ajustable </strong></p>
                <p>MXN$115</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Dark Choker</strong></h1>
                <img src="img/choquer3.jpg" alt="">
                <p><strong>Choker style fresh border en color negro con detalles en placa y diamante negro, ajustable</strong></p>
                <p>MXN$105</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Tul Graper</strong></h1>
                <img src="img/sombrero1.jpg" alt="">
                <p><strong>Sombrero style tul, en color negro y disponible tambien en gris liso, en tallas S, M, L</strong></p>
                <p>MXN$235</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>Dark Marner</strong></h1>
                <img src="img/sombrero2.jpg" alt="">
                <p><strong>Sombrero style dark progresive con detalles estilo marino en placa y plumas, antura 20cm disponible solo en negro, tallas S,M,L</strong></p>
                <p>MXN$315</p>
                <p>
                    <a href="#" class="btn btn-secondary">Ver detalles de compra</a>
                </p>
            </div>
            <div class="col-md-4">
                <h1><strong>FlowerTrup</strong></h1>
                <img src="img/sombrero3.jpg" alt="">
                <p><strong>Sombrero style flower dark prep con detalles en artifical flowers, marino placa y plumas, altura de 10cm en tallas S ,M ,L</strong></p>
                <p>MXN$299</p>
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