<?php
    //Declaramos las variables a recibir
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $anchura = $_POST['anchura'];
    $opcion = (string)$_POST['opcion'];
    if (isset($base) && isset($altura) && isset($anchura) && isset($opcion)) {
        if (is_numeric($base) && is_numeric($altura) && is_numeric($anchura)) {
            if ($opcion == "sinfu" ) {
                $producto = $base * $altura * $anchura;
                echo "El producto es $producto";
            }
            elseif ($opcion == "fret" ) {
                //declaramos la función
                function calreturn ($base,$altura,$anchura){
                   
                    return  $base * $altura * $anchura;
                }
                //Llamamos a la función:
                echo "El producto una función con return es: ".calreturn($base,$altura,$anchura);
            }
            elseif ($opcion == "fref") {
                function &calcref($base,$altura,$anchura){
                   $productoref=$base*$altura*$anchura;
                    return $productoref;
                }
                $productoref = &calcref($base,$altura,$anchura);
                echo "El producto usando referencia es $productoref";
                            }
            elseif ($opcion == "frecu") {
                
                function calcrecu($base,$altura,$anchura){
                    $a = 0;
                    if ($a <= 1) {
                        $prod4 = $base * $altura * $anchura;
                        echo "El producto de una versión con recursividad es $prod4";
                    }
                    else {
                        calcrecu($a+1);
                    }
                   
                }
                 echo calcrecu($base,$altura,$anchura);
            }
            else {
                die("Debes introducir una opción válida");
            }
        }
        else {
            die("Debes introducir un tipo de dato válido");
        }
    }
    else {
        die("Debes introducir los datos correctamente y especificar el método para procesar los datos");
    }
?>