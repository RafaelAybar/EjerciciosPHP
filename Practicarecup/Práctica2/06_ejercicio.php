<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Conversión </title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Número decimal: <input type="number" name="num">
            <input type="submit" value="Enviar"><br>
        </form>
        <?php
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $numero = $_POST['num'];
            if (isset($numero)) {
               echo "El número decimal es $numero </br>";
            $nubin = decbin($numero);
            $nuoc = decoct($numero);
            $nuex = dechex($numero);
            echo "La coversión a binario es $nubin"." a exadecimal $nuex"." y a octal $nuoc";
            }
            else {
                die("Debes introucir el número");
            }
        ?>
    </body>
</html>
