<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 1</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
             /*1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. Utiliza un bucle while*/
            $a = 1;
            do {
                echo "<td> $a </td>";
                $a++
            }
                while ($a<=10);               
            ?>
        </tr>
    </table>
</body>
</html>
