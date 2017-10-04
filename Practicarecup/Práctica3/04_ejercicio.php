<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Cadenas</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Cadena 1 : <input type="text" name="cad1" required>
            Cadena 2 : <input type="text" name="cad2" required>
            <br>
            <input type="submit" value="Enviar"><input type="reset" value="Reestablecer">
            <br>
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $cad1 = $_POST['cad1'];
            $cad2 = $_POST['cad2'];
            if (isset($cad1)&& isset($cad2)) {
            }
            else {
                die("Debes rellenar las 2 cadenas");
            }
        ?>
    </body>
</html>