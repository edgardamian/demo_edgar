<?php 
$rutaBD='../sqlite/usuarios.db';

$conexion=new SQLite3($rutaBD);

/*
C = crear (insert)
R = leer (select)
U = actualizar (update)
D = eliminar (delete)
*/

// if (!$conexion){
//     echo $conexion->lastErrorMsg();
// } else {
//     echo "Conexión exitosa a la base de datos!!";
// }
?>