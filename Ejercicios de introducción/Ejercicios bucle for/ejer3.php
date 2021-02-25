<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 3</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
          /*3. Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100. Utiliza un bucle for.*/
           for ($i = 2; $i <= 100; $i= $i+2) {
            echo "<tr>;";
            echo "<td> $i </td>";
            echo "</tr>;";
            }
            ?>
        </tr>
    </table>
</body>
</html>
