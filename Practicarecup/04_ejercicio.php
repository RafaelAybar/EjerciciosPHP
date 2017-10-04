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
    //Controlamos los errores que se crean al tener todo en el mismo archivo
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        //apartado a
        const SALUDO = "Hola, bienvenido a nuestra web";
        echo SALUDO;
        echo "</br>";
        //apartado b (no se especifica de que figura hay que hacerlo)
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
            echo "No has definido nada </br>";
        }
        //apartado c
        const LUZ = 299792458;
        echo "La velocidad de la luz es ".LUZ. "metros por segundo </br>";
        //apartado d
        const PHI = 1.618;
        if ($base > $altura) {
              function aureo ($base) {
                    $producto = PHI*$base;
                    echo "La proporción es ".$producto;
                            }
            echo aureo($base);
        }
        else {
                echo "No se ha cumplido la condicion de que la base es mayor que la altura";
            }
    ?>
</body>
</head>
