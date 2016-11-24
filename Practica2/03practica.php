<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio3</title>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="default.css">
    </head>
    <body>
        <h3>
        <?php
            //declaramos los arrays
            $array1 = array("pc01" =>"Vacío", "pc02" =>"Rafa", "pc03"=>"Vacío", "pc04"=>"Ivan");
            $array2 = array("pc05" =>"Adrian", "pc06"=>"Angel", "pc07"=>"Diego", "pc08"=>"Quique");
            $array3 = array("pc09"=>"Salah", "pc10"=>"Andrey", "pc11"=>"Isa", "pc12"=>"Dani");
            $array4 = array("pc13"=>"Fran1","pc14"=>"Fran2", "pc15"=>"Vacío", "pc16"=>"Alejandro");
            $array5 = $array1+$array2+$array3+$array4;
            //usamos explode para separar por comas los elementos de cada array
            echo "Los arrays individuales son:</br>";
           var_dump($array1);
           echo "</br>";
            var_dump($array2);
           echo "</br>";
            var_dump($array3);
           echo "</br>";
            var_dump($array4);
           echo "</br>";
            echo "<h2> El conjunto de arrays es: </h2>";
            var_dump($array5);
        ?>
        </h3>
    </body>
</html>
