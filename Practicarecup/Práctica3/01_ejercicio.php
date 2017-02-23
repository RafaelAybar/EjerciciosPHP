<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    //Creamos el array
    echo "El array con números aleatorios es:</br>";
  for ($i = 0; $i <= 30; $i++) {
            $numalet = mt_rand(-99, 99);
            $arrayalet[$i] = $numalet;
        }
        print_r($arrayalet);
    echo "</br>";
    echo "</br>";
    //Apartado uno
    $maximo = max($arrayalet);
    echo "El máximo es $maximo </br>";
    //Apartado dos
    $minimo = min($arrayalet);
    echo "El mínimo es $minimo </br>";
    //Apartado tres
    $media = array_sum($arrayalet) / 30;
    echo "La media es $media </br>";
    //Apartado 4
   
    function contar_negativos(array $arrayalet) { 
        $i = 0; 
        foreach ($arrayalet as $x) 
        if ($x < 0) $i++; 
         return $i; 
        }
        $negativos = contar_negativos($arrayalet);
    echo "La cantidad de números negativos es ".$negativos."</br>";
    //Apartado 5
    arsort($arrayalet); //ordena el array inicial
    //Apartado6
        function unos(array $arrayalet) { 
                $i = 0; 
                foreach ($arrayalet as $x) 
                if ($x = 1); 
                return $i; 
                }
                $unos = unos($arrayalet);
            echo "La cantidad de unos es ".$unos."</br>";

        function dos(array $arrayalet) { 
                $i = 0; 
                foreach ($arrayalet as $x) 
                if ($x = 2); 
                return $i; 
                }
                $dos = dos($arrayalet);
            echo "La cantidad de doses es ".$dos."</br>";

          function treses(array $arrayalet) { 
            $i = 0; 
            foreach ($arrayalet as $x) 
            if ($x = 3); 
            return $i; 
            }
            $cincos = treses($arrayalet);
        echo "La cantidad de treses es ".$treses."</br>";

        function cincos(array $arrayalet) { 
            $i = 0; 
            foreach ($arrayalet as $x) 
            if ($x = 5); 
            return $i; 
            }
            $cincos = cincos($arrayalet);
        echo "La cantidad de cincos es ".$cincos."</br>";
    //Apartado 7
         echo "Los números divisores de 2 son: ";
       foreach ($arrayalet as $a)
            if($a % 2 == 0)
                print_r($a."\n");
echo "</br>";
//Apartado 8
echo "Los números divisores de 5 son ";
 foreach ($arrayalet as $a)
            if($a % 5 == 0)
                print_r($a."\n");
echo "</br>";
//Apartado 9
$cadena = implode($arrayalet);
function contar4( $cadena )
{
    return preg_match_all( "/[4]/", $cadena);
}
$numero4 = contar4($cadena);
echo "El número 4 aparece $numero4 veces </br>";
?>
