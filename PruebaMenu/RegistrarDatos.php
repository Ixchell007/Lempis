<?php 

include("PruebaConex.php");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['ID']) >= 1 && strlen($_POST['Rol']) >= 1) {
	    $ID = trim($_POST['ID']);
	    $Rol = trim($_POST['Rol']);
	    $consulta = "INSERT INTO rol(RolID, RolNombre) VALUES ('$ID','$Rol')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se ha registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>