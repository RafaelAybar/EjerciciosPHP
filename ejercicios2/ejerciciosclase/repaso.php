<?php
    // 1º calcular la varianza dado un array de nºs enteros
        for ($u=0; $u <=10 ; $u++) { 
            $array[$u] = (int)$u;
        }
        $suma = 0;
        //Calculammos la media aritmética
        for ($i=0; $i <=count($array)-1 ; $i++) {
            $suma += $array[$i];
        }
        $media = (float)$suma / count($array);
        //calculamos el paréntesis
        $parent =0;
        for ($a=0; $a <= count($array)-1 ; $a++) { 
            $parent += (float) (pow($array[$a]-$media,2));
        }
        $varianza = (float)$parent/(count($array)-1);
        echo "La varianza es ".$varianza."<br>";
        //
        /*foreach ($array as $array => $valor) {
            echo $valor;
        }*/
    
    //Dado un array escalar, calcular max y min sin fdx usando foreach
        arsort($array); //Ordena el array de mayor a menor
        //print_r($array);
    foreach ($array as $valor) {
            if ($valor === end($array)/* Da el último elemento del array*/) {
                echo $valor." Es el menor <br>";
            }
            elseif ($valor ===  reset($array)) { //Da el primer punto del array
                echo " $valor es el mayor <br>";
            }
            elseif (end($array) === reset($array)) {
                echo "Son iguales <br>";
            }
        }
    // Contar nº de caracteres que tiene un fichero llamado fichero.txt usar la función contarletras($fichero)
    $ruta = $_SERVER['DOCUMENT_ROOT']."/EjerciciosPHP/ejercicios2/ejerciciosclase/fichero.txt";
    if (is_file($ruta) && is_readable($ruta)) {
        $listafich = file("$ruta");
        $lista = implode("",$listafich);
        
        // Generamos un array escalar con letras:
        
       
        function contarletras($lista){
            $letra = 'a';
            for ($j=0; $j < 26 ; $j++) { 
                $palabras[$j] = $letra;
                $letra++;
            }
            // añadimos la ñ
            $palabras[26]= "ñ";
            // inicamos un contador
            $cont = 0;
            // pasamos todo a minúscula para que no haya problemas
            strtolower($lista);
            //Comprobamos que las letras estén en la lista
            for ($g=0; $g < strlen($lista) ; $g++) { 
                if (in_array("$lista[$g]",$palabras)) {
                    $cont += 1;
                }
            }
            echo "hay $cont letras";
        }
echo contarletras($lista);
    }
    else {
        die("Ruta o permisos incorrectos");
    }
?>