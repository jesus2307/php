<?php
/*9. Escribe un script PHP que permita ordenar el siguiente array asociativo:
array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
*/

list = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
echo '<h2>De forma ascendente ordenado por valor.</h2>'
asort($lista);

foreach ($lista as $clave => $valor){
echo 'clave' $clave = valor $valor 
echo "<br>"
}

list = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
echo '<h2>De forma ascendente ordenado por clave.</h2>'
arsort($lista);

foreach ($lista as $clave => $valor){
echo 'clave' $clave = valor $valor 
echo "<br>"
}
list = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
echo '<h2>De forma descendente ordenado por valor.</h2>'
ksort($lista);

foreach ($lista as $clave => $valor){
echo 'De forma descendetne ordenado por clave.' $clave = valor $valor 
echo "<br>"
}
list = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
echo '<h2>Valor</h2>'
krsort($lista);

foreach ($lista as $clave => $valor){
echo 'clave' $clave = valor $valor 
echo "<br>"
}
?>
