<?php
    //Arrays escalares
    $b = 5;
    $a[]=2;
    $a[4]=4;
    $a[3] = "Hola";
    $a["lalala"] = 4; //array asociativo
    $a[$b] = 5;
    print_r($a);
    //Array bidimensional
    $b2[0][0]=3;
    echo "<br>";
    print_r($b2);
    echo "<br>";
    //Mostrar 10 enteros en pantalla
    $c[0]=1;
    $c[1]=2;
    $c[2]=3;
    $c[3]=4;
    $c[4]=5;
    $c[5]=6;
    $c[6]=7;
    $c[7]=8;
    $c[8]=9;
    $c[9]=10;
    print_r($c); 
    echo "<br>";

    for ($i=0; $i <100 ; $i++) { 
       $g[$i] = $i;
    }
    print_r($g);
    echo "<br>";
  $h["objeto"] = "coche";
  $h["modelo"]= "seat";
  $h["color"] = "rojo";
     print_r($h);
     echo "<br>";
     //echo implode(" ",$h);
foreach ($a as $key => $value) {
    echo " $key -- $value ";
}
echo "<br>";
//funnciones para el anejo de arrays:
/*array() sizeof(variable), is_array(variable), is_integer(), array_values(array) */
$array =array(1 =>2,2,3); //índice => valor
print_r($array);
// array_values(array) almacena los valores en otro escalars
?>