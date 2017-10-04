<?php
    //declaración de array
    echo "El array original es: ";
    $array = array(5=>200,0=>450,7=>"ejemplo",3=>200.16, 8=>'Otro ejemplo',9=>500);
    //mostramos el valor del array
    print_r($array);
    echo "</br>";
    echo "</br>";
    //declaramos el segundo array
    $array2 = array(10=>1000);
    //añadimos el array y lo mostramos en pantalla
    echo "El array es: ";
    $array3 = $array + $array2;
    print_r($array3);
    echo "</br>";
    echo "</br>";
    //sustituimos los elementos con claves 5 y 10 con los valores deseados:
    $sustituto = array(5=>'Ej',0=>450,7=>"ejemplo",3=>200.16, 8=>'Otro ejemplo',9=>500,10=>'Otro ejemplo2');
    $arraydef = array_replace($array2, $sustituto);
    echo "El array final es: ";
    print_r($arraydef);
    echo "</br>";
    echo "</br>";
    //eliminamos los elementos del array y lo mostramos por pantalla
    $array5 = array_splice($arraydef,0,-1);
    echo "El array final es : ";
    print_r($array5);
    echo "</br>";
    echo "</br>";
    //eliminamos los elementos del índice 3 y 9
    $array6 = array(3=>200.6, 9=>500);
    $arrayn = array_diff($array5,$array6);
    echo "el resultado es: ";
    print_r($arrayn);
?>