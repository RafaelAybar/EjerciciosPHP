<?php
    //declaramos la variable auxiliar
    $a = 1;
    do {
        $suma = $a +1;
        
        if ($a == 10) {
            echo $a;
        }
        else {
            echo $a."-";
        }
    $a++;
    } while ($a <= 10);
?>
