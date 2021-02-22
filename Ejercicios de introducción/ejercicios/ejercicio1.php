/*1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda.
<?php
/*1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda.*/
$moneda = rand(0, 1);

if ($moneda == 0) {
    echo "<img src='https://www.fotoefectos.com/efectos/examples/2/euro.jpg'>";
}
else {
    echo "<img src='https://www.joyeriasanchez.com/2886-thickbox_default/moneda-cruz-rosario.jpg'>";
}
?>