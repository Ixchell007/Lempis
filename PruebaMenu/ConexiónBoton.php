<?php
$conexion = new mysqli();
$conexion->connect('localhost:3307','root','diosadelaluna16','Escuela');
     if($conexion->connect_error)
{        
          header("location:Error.php");
}
else {
	header("location:Pruebamenu.html");
}
?>