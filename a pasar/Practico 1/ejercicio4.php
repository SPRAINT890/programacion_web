<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <div class="div">
        <h1>Ejercicio 4</h1>
    </div>
    <?php

    include_once 'template/menu.php';

    ?>
    
    <h2>Parte 1</h2>
    <?php 
    $paises = array("uruguay", "brasil", "argentina", "colombia", "venezuela");
    
    for ($i=0; $i < count($paises); $i++) { 
        
        echo $paises[$i];
        echo "<br>";
        
    }
    ?>
    <br>
 
    <h2>Parte 2</h2>
    <select name="paises" id="paises">
    
        <?php 
        $paisesDos = array("uruguay", "brasil", "argentina", "colombia", "venezuela");
        
        for ($i=0; $i < count($paisesDos); $i++) { 
            
            echo '<option value="' . $paisesDos[$i] . '">' . $paisesDos[$i] . '</option>';
            
        }
        ?>

    </select>
</body>
</html>