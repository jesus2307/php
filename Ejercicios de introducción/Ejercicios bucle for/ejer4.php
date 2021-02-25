<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 4</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
         /*4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un bucle for*/
         $numero=rand(1, 10);
         for ($i=0; $i <=10; $i++){    
            echo "<tr>";
            echo "<td> $numero </td>";
            echo "<td> x </td>";
            echo "<td> $i </td>";
            echo "<td> = </td>";
            echo "<td>".$numero*$i."</td>"; /*unir variables*/ 
            echo "</tr>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
