<?php

include("PruebaConex.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['Matricula']) >= 1 &&               
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellidos']) >= 1 &&
        strlen($_POST['Dirección']) >= 1 &&
        strlen($_POST['Población']) >= 1 &&
        strlen($_POST['F_Nacimiento']) &&
        strlen($_POST['Cod_Postal']) >= 1 &&
        strlen($_POST['Telefono']) >= 1 && 
        strlen($_POST['CURP']) >= 1){

            $Matricula = trim($_POST['Matricula']);            
            $Nombre = trim($_POST['Nombre']);
            $Apellidos= trim($_POST['Apellidos']);
            $Dirección = trim($_POST['Dirección']);
            $Población = trim($_POST['Población']);
            $F_Nacimiento = trim($_POST['F_Nacimiento']);
            $Cod_Postal = trim($_POST['Cod_Postal']);
            $Telefono = trim($_POST['Telefono']);
            $CURP = trim($_POST['CURP']);

            
            $consulta = "INSERT INTO Alumno(DNI_Alumno, Nombre, Apellidos, Dirección, Población, F_Nacimiento, Cod_Postal, Telefono, CURP) VALUES ('$Matricula', '$Nombre', '$Apellidos', '$Dirección', '$Población', '$F_Nacimiento', '$Cod_Postal', '$Telefono', '$CURP')";
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
        } else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }     
}