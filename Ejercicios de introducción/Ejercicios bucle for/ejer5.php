<?php
/*5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for*/
$numero=rand(1, 10);
echo "<table>";
for ($numero = 1; $numero<=10; $numero++;){
    for ($i=0; $i <=10; $i++){    
        echo "<tr>";
            echo "<td> $numero </td>";
            echo "<td> x </td>";
            echo "<td> $i </td>";
            echo "<td> = </td>";
            echo "<td>".$numero*$i."</td>"; // para unir variables a la cadena de texto se usan los .variable.
        echo "</tr>";
    }
}
echo "</table>";
?>
