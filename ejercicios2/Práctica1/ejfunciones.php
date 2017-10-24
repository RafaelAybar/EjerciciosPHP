<?php
    $cadena = " ho la";
    //f(x) para eliminar espaciacios en blanco
    /*function espacios($cadena)
    {
        $n = 0;
        $i= 0; //Recorrerá la cadena auxiliar
        $long = strlen($cadena);
        while ($n <= $long) { //Recorremos la cadenas
            if ($cadena[$n]!==" "){
                $aux[$i]= $cadena[$n];
            }
            $i++;
        }
        return $aux;
    }
    var_dump(espacios($cadena));
    echo "<br>";
    */
    // Calcular MCDivisor de 2 positivos
$num1 = 120;
$num2 = 420;
    function mcd($num1,$num2){
       if ($num1 > $num2) {
        if ($num1 % $num2 != 0) {
            $mcd = $num1 % $num2;
            
        }
       }
       elseif($num1 < $num2) {
        if ($num2 % $num1 != 0) {
            $mcd = $num2 % $num1;
            
        }
       }
       else {
           echo "Son iguales";
       }
       return $mcd;
    }
    echo "El Máximo Común Divisor es ".mcd($num1,$num2)." <br>";
    //Transformar carácteres en mayúsculas
    //Seleccionar una letra y contar el nº de veces que aparece en una cadena
?>