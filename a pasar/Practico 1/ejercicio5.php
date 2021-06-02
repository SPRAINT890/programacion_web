<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <div class="div">
        <h1>Ejercicio 5</h1>
    </div>
    <?php

    include_once 'template/menu.php';

    $factura = array(array("cantidad", "descripción", "precio unitario", "subtotal"),
                    array("1"        , "factura 1"  , "100p"           , "100p")    ,
                    array("2"        , "factura 2"  , "5p"             , "10p")     ,
                    array("4"        , "factura 3"  , "10p"            , "40p"));
    
    for ($i=0; $i < count($factura); $i++) { 
        if ($i>0) {
            echo "<br>";
        }
        for ($j=0; $j < 4; $j++) { 
            echo $factura[$i][$j];
            echo " || ";
        }
    }
    
    
    ?>
    


</body>
</html>