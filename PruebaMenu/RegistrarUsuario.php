<?php

include("PruebaConex.php"); //este documento tenerlo a la vista ya que comprueba la conexion a la base de datos

if(isset($_POST['registrar'])){
        if(strlen($_POST['UsuarioID']) >= 1 &&                  //recuerden cambiar las variables de acuerdo a su base de datos
        strlen($_POST['UsuarioRolID']) >= 1 &&
        strlen($_POST['UsuarioNickName']) >= 1 &&
        strlen($_POST['UsuarioPasswd']) >= 1 ){

            $UsuarioID = trim($_POST['UsuarioID']);                 //igual aqui tambien las variables de acuerdo a su base de datos
            $UsuarioRolID = trim($_POST['UsuarioRolID']);
            $UsuarioNickName = trim($_POST['UsuarioNickName']);
            $UsuarioPasswd = trim($_POST['UsuarioPasswd']);


            //Para la seccion de insert que esta abajo van a phpmyadmin, seleccionan la tabla, arriba le dan en SQL y abajo en letras grandes
            //Le dan clic en INSERT y lo pegan despues de $consulta y tiene que quedar similar
            $consulta = "INSERT INTO usuario(UsuarioID, UsuarioRolID, UsuarioNickName, UsuarioPasswd) VALUES ('$UsuarioID', '$UsuarioRolID', '$UsuarioNickName', '$UsuarioPasswd')";
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
    }else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }     
}