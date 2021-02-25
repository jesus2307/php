<?php
/*4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un bucle for*/
$numero=rand(1, 10);
echo "<table>";
for ($i=0; $i <=10; $i++){    
    echo "<tr>";
        echo "<td> $numero </td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td>".$numero*$i."</td>"; // para unir variables a la cadena de texto se usan los .variable.
    echo "</tr>";
}
echo "</table>";
?>
