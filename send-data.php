<?php
require 'mysqlconnect.php';
if ($_GET){

    $piso = $_GET['piso'];
    $edificio = $_GET['edificio'];
    $oficina = $_GET['oficina'];
    $Descripcion = $_GET['Descripcion'];
    $codigo = $_GET['codigo'];
    $color = $_GET['color'];
    $modelo = $_GET['modelo'];
    $marca = $_GET['marca'];
    $tipo = $_GET['tipo'];
    $ano = $_GET['ano'];
    $valor_compra_bs = $_GET['valor_compra_bs'];
    $referncia_dolar = $_GET['referncia_dolar'];
    $fecha_ing = $_GET['fecha_ing'];
    $stat_activo = $_GET['stat_activo'];
    $id = $_GET['id'];

    $check = "INSERT INTO activos(piso, edificio, oficina, Descripcion, codigo, color, modelo, marca, tipo, ano, valor_compra_bs, referncia_dolar, fecha_ing, stat_activo, id) values($piso, $edificio, $oficina, \"$Descripcion\", $codigo, \"$color\", \"$modelo\", $marca, $tipo, $ano, $valor_compra_bs, $referncia_dolar, $fecha_ing, \"$stat_activo\", $id)";

    try {
        $verify = mysqli_query($link, "SELECT * FROM activos WHERE (codigo = $codigo)")->fetch_row();

        if ($verify == null){
            $validation = mysqli_query($link, $check);

            if ($validation){
                echo 'Ay tas registrao\' :D <a href="index.php">volver</a>';
            }
            else {
                echo 'algo salió mal :/';
            }
        }
        else {
            throw new mysqli_sql_exception("Entry 'codigo' already exists.");
        }
    }
    catch (mysqli_sql_exception $th) {
        echo "MySQL Error: ".$th->getMessage();
    }
}
?>
