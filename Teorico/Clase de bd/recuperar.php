<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar</title>
</head>
<body>
    <?php
    // PDO                  HOST              DB_NAME     USER    PASS
    $pdo = new PDO('mysql:host=localhost;dbname=empresa', 'root'. '');
    
    $sentencia = $pdo->query("SELECT '¡Hola, querido usuario de MySQL! estas conectado por PDO' as _message FROM DUAL");

    $fila = $sentencia->fetch(PDO::FETCH_ASSOC);

    echo htmlentities($fila['_message']);

    echo "<br><br>";

    ?>
</body>
</html>