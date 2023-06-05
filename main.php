<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require "mysqlconnect.php";
        ?>  
        
        <h1>Formulario para pedir datos al usuario :o</h1>
        <form action="send-data.php" method="get">
            <div style="display: flex; flex-direction: column; width: 40%">
                <input type="number" name="piso" placeholder="piso">
                <input type="number" name="edificio" placeholder="edificio">
                <input type="number" name="oficina" placeholder="oficina">
                <input type="text" name="Descripcion" placeholder="descripcion">
                <input type="number" name="codigo" placeholder="código">
                <input type="text" name="color" placeholder="color">
                <input type="text" name="modelo" placeholder="modelo">
                <input type="number" name="marca" placeholder="marca">
                <input type="number" name="tipo" placeholder="tipo">
                <input type="number" name="ano" placeholder="año">
                <input type="number" name="valor_compra_bs" placeholder="precio en bs">
                <input type="number" name="referncia_dolar" placeholder="referencia a dolar">
                <input type="number" name="fecha_ing" placeholder="fecha de ingreso">
                <input type="text" name="stat_activo" placeholder="estado">
                <input type="number" name="id" placeholder=" id">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
