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
/*$num1 = 120;
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
  */  
    //Transformar carácteres en mayúsculasS
    $cadena = "hola";
    $aux = 0;
    //Generamos un array con minúsculas y otro con mayúsculas
    
    //print_r($arrayminus);
    echo "<br>";
    
    //print_r($arraymayus);
function sustituirletra($cadena){
    for ($i=a; $i <=z; $i++) {
        $arrayminus[$aux]="$i";
        if ($aux == 25){
            break;
        }
        else {
            $aux++;
        }
        }
        $auxx = 0;
    for ($o=A; $o <=Z; $o++) {
            $arraymayus[$auxx]="$o";
            if ($auxx == 25){
                break;
            }
            else {
                $auxx++;
            }
            }

    for ($w=0; $w <strlen($cadena) ; $w++) { 
        if (in_array($cadena[$w],$arrayminus)) { //Comprobamos que los carácteres sean alfabéticos
        $cadena[$w]= $arraymayus[array_search($cadena[$w],$arrayminus)];//obtenemos el índece del array
        }
    }
    return $cadena;
}
echo sustituirletra($cadena);
    //Seleccionar una letra y contar el nº de veces que aparece en una cadena
?>