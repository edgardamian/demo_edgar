<?php 
include 'conectar.php';

$sql="SELECT * FROM personas";

$bolsa=$conexion->query($sql);

$registros=array();

while($a=$bolsa->fetchArray(SQLITE3_ASSOC)){
    $registros[]=$a;
}

// var_dump($registros);

$datosJSON=json_encode($registros);
// echo $datosJSON;
?>