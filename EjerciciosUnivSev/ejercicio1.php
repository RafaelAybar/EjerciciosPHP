<?php
    //Declaramos las variables
    $cantii = $_POST['cantidad'];
    $pesetae = $_POST['peseteuros'];
    $europes = $_POST['europeset'];
    //Condiciones
    if (isset($cantii) && isset($pesetae) && isset($europes)) {
        echo "No tiene sentido seleccionar ambas conversiones a la vez";
    }
    elseif (!$europes) {
        echo "Has seleccionado la conversión de pesetas a euros </br>";
        $prod1 = (float) $cantii / 166.38;
        echo "La cantidad resultante es $prod1 €";
    }
    elseif (!$pesetae) {
         echo "Has seleccionado la conversión de euros a pesetas </br>";
        $prod2 = (int) $cantii * 166.38;
        echo "La cantidad resultante es $prod2 pesetas";
    }
    elseif (!$pesetae && !$europes){
        echo "Debes seleccionar un tipo de conversión"
    }
?>