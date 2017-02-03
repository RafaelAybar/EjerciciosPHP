<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi priemr script en PHP</title>
    </head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Introduce la base: <input type="number" name="base" requied></br>
   Introduce la altura: <input type="number" name="altura" required></br>
   <input type="submit" value="Enviar">
   <input type="reset" value="Reestablecer"></br>
    <?php
        //apartado a
        const SALUDO = "Hola, bienvenido a nuestra web";
        echo SALUDO;
        echo "</br>";
        //apartado b
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        if (isset($base) && isset($altura)) {
           function area ($base, $altura) {
            $producto = $base*$altura;
            echo "El área es $producto </br>";
        }
        echo area($base,$altura)."</br>";
        }
        else {
            echo "No has definido nada";
        }
    ?>
</body>
</head>
