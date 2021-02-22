<?php
/*1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. Utiliza un bucle for*/
echo "<tr>";
        for ($a = 0; $a <= 10; $a++) {
            
            echo "<td> $a </td>";
        }
        echo "</table>";
        echo "</tr>";
?>