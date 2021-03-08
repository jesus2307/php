<?php
// include vs require
// include si la funcion no existe continua ejecutando el codigo
// require exige que exista el archivo

include "funciones.php";

// Aquí estoy haciendo uso de la funcion "saludo"
saludo();

echo "<br>";

saludo_usuario("pepei");

echo "<br>";

$salida = saludo_usuario_con_salida("pepe");
echo $salida;

?>