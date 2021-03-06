<?php
/* 4. Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Buscar el valor mínimo de los valores del array.
Muestre el valor mínimo que ha encontrado.*/

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
/*MINIMO*/
$minimo = 10;
for ($i = 0; $i <= 10; $i++){
    if ($lista[$i] < $minimo) {
    $minimo = $lista[$i];
    }
}
echo "Valor minimo: $minimo";
?>