<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <div class="div">
        <h1>Ejercicio 6</h1>
    </div>
    <?php
    
    include_once 'template/menu.php';

    ?>
    <div class="divD">
        <h2>Parte 1</h2>
        <form action="ejercicio6.php" method="get">
            
            <label for="valorUno">Primer Valor</label>
            <input type="number" name="valorUno" id="valorUno">

            <label for="valorDos">Segundo Valor</label>
            <input type="number" name="valorDos" id="valorDos">

            <br><br>
            <input type="submit" value="Sumar" name="sum">
            <input type="submit" value="Restar" name="rest">
            <input type="submit" value="Multiplicar" name="mult">
            <input type="submit" value="Dividir" name="div">
            <br><br>
        </form>
        
        <?php
        if (isset($_GET['valorUno'])) {
            $valUno = $_GET['valorUno'];  
            $valDos = $_GET['valorDos'];
        }
        

        if (isset($_GET['sum'])) {
            echo "<span>El resultado de la suma es: </span>" . $valUno + $valDos ;
        }

        if (isset($_GET['rest'])) {
            echo "<span>El resultado de la resta es: </span>" . $valUno - $valDos ;
        }

        if (isset($_GET['mult'])) {
            echo "<span>El resultado de la multiplicacion es: </span>" . $valUno * $valDos ;
        }
        
        if (isset($_GET['div'])) {
            echo "<span>El resultado de la division es: </span>" . $valUno / $valDos ;
        }
        ?>
    </div>
    <br>
    <div class="divD">
        <h2>Parte 2</h2>
        <form action="ejercicio6.php" method="get">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="edad">Edad</label>
            <input type="text" name="edad">

            <label for="tel">Telefono</label>
            <input type="number" name="tel">
            
            <label for="dir">Direccion</label>
            <input type="text" name="dir">

            <label for="email">Correo</label>
            <input type="text" name="email">
        
            <input type="submit" value="Enviar" name="submit">
        </form>

        <?php
        if (isset($_GET['submit'])) {
            $nombre = $_GET['nombre'];
            $edad   = $_GET['edad'];
            $tel    = $_GET['tel'];
            $dir    = $_GET['dir'];
            $email  = $_GET['email'];

            echo "<br>mi nombre es " . $nombre . ", tengo " . $edad . ", vivo en " . $dir . ", mi telefono de contacto es " . $tel . ", mi email de contacto es " . $email;
        }

        ?>
    </div>
    <br>
    <div class="divD">
        <h2>Parte 3</h2>
        <form action="ejercicio6.php" method="get">
            
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad">

            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion">

            <label for="preciou">Precio Unitario</label>
            <input type="number" name="preciou">

            <label for="subtotal">Subtotal</label>
            <input type="number" name="subtotal">

            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php
        if (isset($_GET['cantidad'])) {
            $factura = array(
                array("cantidad", "descripción", "precio unitario", "subtotal")     ,
                array($_GET['cantidad'] , $_GET['descripcion'] , $_GET['preciou']   , $_GET['subtotal']));

            for ($i=0; $i < count($factura); $i++) { 
                if ($i>0) {
                    echo "<br>";
                }
                for ($j=0; $j < 4; $j++) { 
                    echo $factura[$i][$j];
                    echo " || ";
                }
            }
        }
        
        ?>
    </div>
</body>
</html>