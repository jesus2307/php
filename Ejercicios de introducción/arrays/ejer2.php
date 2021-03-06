<?php
/*2. Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Calcular el valor medio de los valores del array.
Mostrar el valor medio que ha calculado.*/

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
/*  MEDIA*/
$suma = 0;
for ($i = 0; $i <= 10; $i++){
    $suma = $suma + $lista[$i];
}
    $media = $suma / count($lista);
    echo "Valor medio: $media";
?>