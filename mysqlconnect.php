<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sistema');
define('DB_PORT', '3307');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
if($link == false){
    die("ERROR: No se pudo conectar a la base de datos. " . mysqli_connect_error());
}

?>