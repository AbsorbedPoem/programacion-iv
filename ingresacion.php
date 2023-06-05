<?php

function desloguiar(){
    $_SESSION['is_logged'] = null;
    $_SESSION['id'] = null;
    $_SESSION['usuario'] = null;

    session_write_close();
    echo "desloguiao";
}

session_start();

// si es enviado algun POST
if ($_POST){

    // petición de logueo
    if (isset($_POST['nombre_de_usuario'])){
        include 'mysqlconnect.php';

        $nombre_de_usuario = $_POST['nombre_de_usuario'];
        $check = "SELECT * FROM usuarios WHERE nombre = \"$nombre_de_usuario\"";
        
        // verifica la existencia del nombre de usuario
        $result = mysqli_query($link, $check)->fetch_all();
        
        if (count($result) == 1){
            $_SESSION['is_logged'] = true;
            $_SESSION['id'] = intval($result[0][0]);
            $_SESSION['usuario'] = $result[0][1];
        }
        else { // si la base de datos no encontró resultados
            echo '<span style="color: red;">Error: Usuario o contraseña incorrectos';
        }
    }

    // petición de deslogueo
    if (isset($_POST['desloguiate']) && isset($_SESSION['is_logged'])){
        desloguiar();
    }
}

// muestra los datos si tiene una sesión activa
if (isset($_SESSION['is_logged']) && $_SESSION['is_logged'] === true){
    $u = $_SESSION['usuario'];
    echo "felicidade' $u tas loguiao";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ingresacion.php" method="post">
        <input type="text" name="nombre_de_usuario" required placeholder="usuario">
        <input type="password" name="contrasena" required placeholder="contraseña">
        <input type="submit" value="Ingresar">
    </form>
    <form action="ingresacion.php" method="post">
        <input type="hidden" name="desloguiate" value="true">
        <input type="submit" value="Desloguiate">
    </form>
</body>
</html>
