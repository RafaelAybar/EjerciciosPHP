<?php
    // 1
    for ($contador=1; $contador <=52 ; $contador++) { 
        if ($contador % 2 !== 0) {
            echo "$contador ";
        }
    }
// 2
echo "<br>";
$a = 2;
$b = 2;
$c = 1;
if ($a > $b && $a >$c) {
    echo "$a es el mayor";
    if ($b > $c){
        echo " $b es el mediano, y $c es el menor";
    }
    elseif ($b < $c) {
        echo " $c es el mediano, y $b es el menor";
    }
    else {
        echo " $b y $c son iguales";
    }
}
elseif ($b > $a && $b > $c){
        echo "$b es el mayor";
        if ($a > $c) {
            echo " $a es el mediano y $c es el menor";
        }
        elseif($a < $c){
            echo" $c es el mediano y $a el menor";
        }
        else {
            echo " $a y $b son iguales";
        }
    }
elseif ($c > $a && $c > $b) {
    echo "$c es el mayor";
    if ($a > $b) {
        echo "$ a es el mediano, y $b el menor";
    }
    elseif ($a < $b) {
        echo " $b es el mediano, y $a el menor";
    }
    else {
        echo " $a y $b son iguales";
    }
}
else {
    echo" Los 3 números son iguales";
}
?>