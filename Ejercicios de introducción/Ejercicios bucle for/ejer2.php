  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer 2</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
           /*2. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una columna y 10 filas. Utiliza un bucle for.*/
                for ($i = 1; $i <= 10; $i++){
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "</tr>";
                }
            ?>
        </tr>
    </table>
</body>
</html>
