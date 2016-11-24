<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="default.css">
    </head>
    <body>
        <h3>
                <?php
        $arrayvalor = [];
        $c          = 0;
        // Iniciamos las variables para guardar los dos mayores números
        $m1 = $m2 = 0;

        do {

            $nurand = mt_rand(10, 100);

            if (!in_array($nurand, $arrayvalor)) {
                // Guardamos cada vuelta el numero generado
                $arrayvalor[$c] = $nurand;
            }

            // Comprobamos que el array no devuelva null
            if (isset($arrayvalor[$c])) {

                // Comprobamos y guardamos los dos mayores números

                
                if ($arrayvalor[$c] > $m1) {

                   
                    $m2 = $m1;
                    $m1 = $arrayvalor[$c];}
                // Comprobamos
                elseif ($arrayvalor[$c] > $m2) {

                    $m2 = $arrayvalor[$c];  // Guardamos el número
                }
            }
            $c++;

        } while ($c <= 8);

        echo 'Mayor 1 = '.$m1;
        echo "\n";
        echo 'Mayor 2 = '.$m2;
        echo "\n";
        print_r($arrayvalor);
        ?>
        </h3>
    </body>
</html>
