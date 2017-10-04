<?php
    echo "Lanzamiento de moneda aleatorio (cara o cruz) <br/>";
    $numeroresultado = rand(1,2);
    if ($numeroresultado == 1) {
        echo "Ha salido cruz";
    }
    elseif ($numeroresultado == 2) {
        echo "Ha salido cara";
    }
    else {
        echo "Tengo que mejorar el script";
    }
?>
