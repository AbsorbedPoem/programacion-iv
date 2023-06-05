<?php

require 'mysqlconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["nombre_de_usuario"]))){
        $username_err = "Por favor ingrese un nombre de usuario";
    } elseif(!preg_match('/^[a-z][a-zA-Z0-9_\-]{3}[a-zA-Z0-9_\-]*$/', trim($_POST["username"]))){
        $username_err = "\"Nombre\" debe comenzar en una letra, y tener solo carácteres alfanuméricos, guión o guión bajo";
    }
}
    
?>
