<?php
if (!empty($_GET["DNI_Alumno"])){
    include("PruebaConex.php");
    $DNI_Alumno = $_GET["DNI_Alumno"];

    $eliminar = $conex->query("DELETE FROM Alumno WHERE DNI_Alumno = '$DNI_Alumno'");
    if ($eliminar) {
        ?> 
        <h3 class="ok">¡Se ha registrado correctamente!</h3>
       <?php
        header("location: EliminarAlumnoTabla.php");
    } else {
        ?> 
        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
}        
}
?>