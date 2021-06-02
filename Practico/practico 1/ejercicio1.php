<link rel="stylesheet" href="css.css">
<div class="div">
    <h1>Ejercicio 1</h1>
</div>
<?php

    include_once 'template/menu.php';

    $valUno     = 4;
    $valDos     = 8;
    $valTres    = 12;
    $valCuatro  = 6;

    echo $valUno . " + " . $valDos . " = " . $valUno + $valDos;
    
    echo "<br>";
    
    echo $valDos . " - " . $valUno . " = " . $valDos - $valUno;

    echo "<br>";

    echo $valTres . " x " . $valCuatro . " = " . $valTres * $valCuatro;

    echo "<br>";

    echo $valTres . " / " . $valCuatro . " = " . $valTres / $valCuatro;
?>