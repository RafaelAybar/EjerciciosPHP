<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi primer script en PHP</title>
    </head>
<body>
    <?php
        $var1 = false;
        $var2 = "";
        $var3 = "0";
        $var4 = null;
        $var5 = array(1=>5);
        echo "Los tipos de variables son: </br>";
        echo gettype($var1)." ".gettype($var2)." ".gettype($var3)." ".gettype($var4)." ".gettype($var5);
    ?>
</body>
</html>