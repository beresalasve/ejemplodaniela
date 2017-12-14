<?php
if(isset($_POST["enviar"])){
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $password=$_POST["password"];

    $mysqli=new mysqli("localhost","root","admin123", "programacionweb");
    $consulta="INSERT INTO usuarios (Nombre,correo,password) VALUES('$nombre','$correo','$password')";
    $resultado=$mysqli->query($consulta);
}
?>