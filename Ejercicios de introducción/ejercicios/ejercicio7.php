<?php
/*7. Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen con los valores obtenidos en cada uno de los dados.*/
$dado1 = rand(1,6);
$dado2 = rand(1,6);
echo "<img src=\"imagenes/$dado1.svg\">";
echo "<img src=\"imagenes/$dado2.svg\">";
?>
