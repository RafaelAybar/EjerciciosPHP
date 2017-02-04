<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi primer script en PHP</title>
    </head>
<body>
    <?php
    //Apartado 1
    $potencia = -155*(pow(10,300));
    echo "El numero es </br> ";
    var_dump($potencia);
    //Apartado 2
    $juego = "¡Ha ganado 100€ en nuestro juego!";
    echo "$juego </br>";
    //Apartado 3
    $a = true;
    $b = false;
    $c = true;
    if ($a == true && $b == false && $c == true) {
        echo "La variable a es verdadera, la b es falsa y c es verdadera </br>";
        echo "La condición c no puede cumplirse, al al ser a verdadero y b falso </br>";
    }
    //Apartado 4
    $num1oct = 034273557;
    $num2oct = 013234;
    $x = $num1oct+$num2oct;
    echo "La suma es $x </br>";
    //Apartado 5
    $nucec = 288;
    $nuoc = decoct($nucec);
    $nuhex = dechex($nucec);
    echo "El número decimal es $nucec , y el octal tras pasar por la función es $nuoc </br>";
    echo "El número  hexadecimal es $nuhex </br>";
    //Apartado 6
    $hola = "HOLA";
    $adios = "ADIOS";
    echo "El numero de caracteres es ".strlen($hola)." y ".strlen($adios)."</br>";
    echo substr($hola, 2,1)."</br>";
    echo substr($adios, 2,1)."</br>";
    //Apartado 7
    $var1 = "8979776546";
    $var2 = "897859";
    $v3 = (int)$var1;
    $v4 = (int)$var2;
    $prdu = $v3*$v4;
    echo "El resultado es $prdu";
    //Apartado 8
    $x2 = (int) 8.5+6;
    $y = (double) 8878.3434;
    $z= (string) 7788745;
    $h =(bool) 3/2; 
    ?>
</body>
</html>