<?php
require_once('databd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario BD</title>
</head>
<body>

    <div>
        <?php
        if (isset($_POST['submit'])) {
            $nombre     = $_POST['nombre'];
            $apellido   = $_POST['apellido'];
            $ci         = $_POST['ci'];
            
            $conexion = new PDO(DSN, USER, PASS);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO persona (Ci, Nombre, Apellido) VALUES(?,?,?)" ;
            $stmtinsert = $conexion->prepare($sql);

            $result = $stmtinsert->execute([$ci, $nombre, $apellido]);
            if ($result) {
                echo "se guardo correctamente";
            }
            else{
                echo "hubo un error al guardar los datos";
            }
            //echo $nombre . " " . $apellido . " " . $email . " " . $ci . " " . $telefono . " " . $contraseña;
        }

        ?>
    </div>

    <div class="">
        <form action="index.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registrar Usuario BD</h1>

                        <hr class="mb-3">

                        <label for="ci">Cedula</label>
                        <input class="form-control" type="number" name="ci" required>

                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" required>

                        <label for="apellido">Apellido</label>
                        <input class="form-control" type="text" name="apellido" required>
                        
                        <hr class="mb-3"> 
                        
                        <input class="btn btn-primary" type="submit" name="submit" value="Registrar">
                        
                    </div>       
                </div>
            </div>
        </form>
    </div>
    <div>
        <?php
        //Muestra resultados
        try {

            $obj_conexion = new PDO(DSN, USER, PASS);
        
            if (!$obj_conexion) {
                echo "<h3>No se ha podido conectar a la BD, verifique sus datos.</h3><hr><br>";
            } else {
                echo "<br><hr>";
        
                /* ejemplo de una consulta */
        
                $consulta = "SELECT * FROM persona";
                $resultado = $obj_conexion->query($consulta);
        
                echo "<table border='1' align='center'>
                    <tr bgcolor='#E6E6E6'>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>";

                foreach ($resultado as $fila) {
                    echo "<tr>";
                    echo "  <td>" . $fila["Ci"] . "</td>";
                    echo "  <td>" . $fila["Nombre"] . "</td>";
                    echo "  <td>" . $fila["Apellido"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
            }
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>