<?php
//Función para números aleatorios
function gennum (){

    // Poner fuera del while y iniciar con 1 para que sean 15 vueltas 
    $i = 1; 

    // Iniciar la suma 
    $suma = 0;       

    while ($i <= 15) {            
        $suma += rand(0, 100);
        $i++;
    }

    $media = $suma / 15;
    return "La media aritmética es $media";
}

$func = gennum();
echo $func;
?>
