<?php
    //abrimos el fichero en modo lectura/escritura y comprobamos que tiene una ruta válida
    //ojo a la función is_readable();
    $nomfichero = "/var/www/html/EjerciciosPHP/ejercicios2/ejemplo.txt";
    if (is_writable($nomfichero)) {
       $fichero=fopen("/var/www/html/EjerciciosPHP/ejercicios2/ejemplo.txt", "r+", USE_INCLUDE_PATH);
        if ($fichero === false || $fichero ===1 || $fichero === null) {
            die("Hubo un error");
        }
        fwrite($fichero,'Esta frase sobreescribe la anterior');
        fclose($fichero);
    }
    else {
      echo "No se puede escribir";
    }
?>