<?php
require_once('databd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de BD</title>
</head>
<body>
    <?php

    try {

        $conexion = new PDO(DSN, USER, PASS);

        if (!$conexion) {
            echo "<h3>No se ha podido conectar a MySQL, verifique sus datos.</h3><hr><br>";
        } else {
            echo "<h3>Conexion Exitosa - MySQL - PDO</h3><hr><br>";

            $consulta = "select * from persona";
            $resultado = $conexion->query($consulta);

            if ($resultado != false) {
                echo "<table border='1' align='center'>
                    <tr bgcolor='#E6E6E6'>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>";

                foreach ($resultado as $fila) {

                    echo "<tr>
                          <td>" . $fila["Ci"]               . "</td>";
                    echo "<td>" . $fila["Nombre"]           . "</td>";
                    echo "<td>" . $fila["Apellido"]         . "</td></tr>";
                }
                
            } else {
                echo "No hay Datos";
            }
        }
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    ?>

</body>
</html>