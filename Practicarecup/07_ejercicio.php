<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi primer script en PHP</title>
    </head>
<body>
    <?php
    //Apartado 1
    $potencia = -155*10^300;
    echo "El número es $potencia </br>";
    //Apartado 2
    $juego = "¡Ha ganado 100€ en nuestro juego";
    echo "$juego </br>";
    //Apartado 3
    $a = true;
    $b = false;
    $c = true;
    if ($a == true && $b == false && $c == true) {
        echo "La variable a es verdadera, la b es falsa y c es verdadera </br>";
        echo "La condición c no puede cumplirse,l al ser a verdadero y b falso </br>";
    }
    //Apartado 4
    $num1oct = 034273557;
    $num2oct = 013234;
    $x = $num1oct+$num2oct;
    echo "La suma es $x </br>";
    //apartado 5
    $nucec = 288;
    $nuoc = decoct(288);
    echo "El número decimal es $nucec , y el octal tras pasar por la función es $nuoc";
    ?>
</body>
</html>