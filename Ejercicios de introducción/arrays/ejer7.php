<?php
/* DECLARAR ARRAY*/
$lista = array();
/* INICIAR ARRAY*/
for ($i = 0; $i < 10; $i++) {
    $lista[$i] = rand(1,30);
}
/* MOSTRAR ARRAY */
for ($i = 0; $i < 10; $i++) {
    echo $lista[$i];
    echo "<br>";
}
?>