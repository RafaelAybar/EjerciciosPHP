<?php
    //Volcar el fichero en un array asociativo y mostrar su contenido en pantalla
    if (is_file("/var/www/html/EjerciciosPHP/ejercicios2/palabras.txt")) {
        $f = fopen('palabras.txt', 'r+');
        //Guardamos el contenido del array
        
        while (!feof($f)) {
            $linea = fgets($f);
            echo "$linea";
        }
        fclose($f);
   }
   else {
        die("No es un fichero");
    }

    //Mostrar en pantalla el fichero ordenado alfabéticamente
    //$fichero = fopen('palabras.txt','r+');
    //$fich = file($fichero);
    //sort($fich);
    //foreach ($fich as $key => $value) {
        //echo $value;
    //}
    // crear una función llamada contar(fichero,caracter) que muestre en pantalla el numero de veces que caracter aparece en el fichero

?>