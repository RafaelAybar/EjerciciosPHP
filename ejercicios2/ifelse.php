<?php
    //Hay que tener en cuenta que esto es secuencial
    $a = 0;
    $a +=3;
    if ($a === 5) {
        echo "Estoy en el if por que cumple la condición <br>";
    }
    else/*elseif ($a !==3) también sirve*/ {
        echo "no entro dentro del if <br>";
    }
    //echo "no entro dentro del if";

    //Bucles:
    //While no recomendado si sabemos el número de iteraciones
    $numero = 1;
    while ($numero <= 19) {
        echo $numero.", ".$b;
        $numero ++;
        if ($numero === 19){
            $b = $numero +1;
        }
    }
    echo "<br>";
    for (/*Contador*/$contador=1; /*Centinela*/$contador <=40 ; $contador++) { 
        echo "$contador ";
    }
?>