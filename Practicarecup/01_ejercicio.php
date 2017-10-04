<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi primer script en PHP</title>
    </head>
    <body>
        <?php
            //Declaramos las variables (en caso de las booleanas no hay que comprobar el tipo)
            //en su lugar, lo comprobamos con la función is_bool
            $verdad = true;
            $falso = false;
            if (is_bool($verdad) == true) {
                echo "verdadero, ";   
            }
            if (is_bool($falso) == true) {
                echo "falso </br>";
            }
            $array = array("e1" =>"Hola");
            $entero = (int) 44;
            $decimal  = (float) 2.98;
            $cadena  = (string) "Hola, soy Rafa";
            echo "$entero, $decimal, $cadena";
            print_r($array);

        ?>
    </body>
</html>