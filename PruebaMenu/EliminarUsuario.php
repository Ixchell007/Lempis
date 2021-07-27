<?php
if (!empty($_GET["UsuarioID"])){
    include("PruebaConex.php");
    $UsuarioID = $_GET["UsuarioID"];

    $eliminar = $conex->query("DELETE FROM Usuario WHERE UsuarioID = '$UsuarioID'");
    if ($eliminar){
        echo "Eliminado Correctamente";
        header("location: EliminarUsuarioTabla.php");
    }else{
        echo "Error al eliminar";
    }
}
?>