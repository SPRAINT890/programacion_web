<link rel="stylesheet" href="css.css">
<div class="div">
    <h1>Ejercicio 2</h1>
</div>
<?php

include_once 'template/menu.php';

$nota = 12;
$notA = array("uno","dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once", "doce");

if ($nota >= 1 and $nota <= 5) {
    echo "La nota " . $notA[$nota-1] . " es insuficiente";
}

if ($nota >= 6 and $nota <= 9) {
    echo "La nota " . $notA[$nota-1] . " es Suficiente";
}

if ($nota == 10 || $nota == 11) {
    echo "La nota " . $notA[$nota-1] . " es Muy Bueno";
}

if ($nota == 12) {
    echo "La nota " . $notA[$nota-1] . " es Excelente";
}


?>