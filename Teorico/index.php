<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    -->
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio</title>
</head>
<body>
    <h1>
        <table class="tabla">
            <tr>
                <th class="borde">I x 10</th>
                <th class="borde">I x 20</th>
                <th class="borde">I x 30</th>
                <th class="borde">I x 40</th>
                <th class="borde">I x 50</th>
            </tr>
            <?php
            for ($i=1; $i < 25; $i++) { 
                echo "<tr>";
                echo '<td class="borde">' . ($i * 10) . "</td>";
                echo '<td class="borde">' . ($i * 20) . "</td>";
                echo '<td class="borde">' . ($i * 30) . "</td>";
                echo '<td class="borde">' . ($i * 40) . "</td>";
                echo '<td class="borde">' . ($i * 50) . "</td>";
                echo "<tr>";
            }
            ?>
        </table>
    </h1>
    <!--
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Direccion Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>
    -->
</body>
</html>