<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Tabla de multiplicar</title>
        <style>
             td { font-size: 30px; font-family: Verdana; color:  #000000; background: #efefef; }
        </style>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Inroduce el número a multiplicar : <input type="number" name="numa" required></br>
        <input type="submit" value="Enviar"><input type="reset" value="reenviar">
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $numa = $_POST['numa'];
            if (isset($numa)) {
                for  ($i=0 ; $i <= 12 ; $i++) {
                    $tabla = $numa * $i;
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>"."$tabla";
                    echo "</td>";
                    echo "</tr>";
                    echo "</table>";
                                }
                }
            else {
                die("No has introducido ningún número");
            }
        ?>
    </body>
</html>
