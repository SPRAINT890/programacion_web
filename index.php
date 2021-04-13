<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>
        <table>
            <!-- Fila 1 -->
            <?php
                for ($i=0; $i < 5; $i++) { 
                    echo "<tr>";
                    echo "<th>" . ($i+5) ."</th>";
                    echo "<th>" . $i . "</th>";
                    echo "</tr>";
                }
            ?>
    </table>
        <?PHP 
            echo "Hola soy un script PHP 1";
        ?>
        <br>
        <?PHP 
            echo "Hola soy un script PHP 2";
        ?>
    </h1>
</body>
</html>