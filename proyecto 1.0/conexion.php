<?php
$mysqli=new mysqli("localhost","root","admin123","programacionweb");
if($mysqli->connect_errno){
    echo"fallo al conectar a mysql:".$mysqli->connect_error;
}
$consulta="SELECT * FROM usuarios";
$resultado=$mysqli->query($consulta);
while($fila=$resultado->fetch_assoc()){
    if($fila["correo"]=$correo &&$password)
    {
        $autenticado=true;
    }
}
?>