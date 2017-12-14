<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="procesarRegistro.php" method="post">
    <div>
    <label for="nombre:">Nombre</label>
    <input type="text"name="nombre">
    </div>
    <div>
    <label for="Corrreo">Corrreo</label>
    <input type="email" name="correo">
    </div>
    <div>
    <label for="Password">password</label>
    <input type="password" name="password">
    </div>
    <div>
    <input type="submit" name="enviar" value"registrarse">
    </div>
        
    </form>
    
</body>
</html>