<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicio3.css">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <div class="div">
        <h1>Ejercicio 3</h1>
    </div>
    <?php
    include_once 'template/menu.php';
    ?>

    <h2>Parte 1</h2>
    
    <?php
    
    $name   = "gaspar";
    $edad   = "17";
    $tel    = "091247770";
    $dir    = "gral. nariño 2388";
    $email  = "gasparmorales1@gmail.com";

    echo "mi nombre es " . $name . ", tengo " . $edad . ", vivo en " . $dir . ", mi telefono de contacto es " . $tel . ", mi email de contacto es " . $email;
    ?>
    
    <br>

    <h2>parte 2</h2>
    <p><?php echo "mi nombre es " . $name . ", tengo " . $edad . " años, vivo en " . $dir . ", mi telefono de contacto es " . $tel . ", mi email de contacto es " . $email; ?></p>
</body>
</html>