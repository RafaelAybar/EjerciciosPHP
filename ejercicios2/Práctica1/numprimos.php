<?php
    define ("verdadero",1);
    define("falso",0);
    $numero = 7;
    function esprimo  ($numero) //cabecera + parámetros formales
    {
        $divisor = 2;
        $numero++;
        $primo = verdadero;
        if ($numero == 1 && $primo ==verdadero) {
            while (($divisor < $numero) && ($primo == verdadero)) {
                if ($numero % $divisor == 0) {
                    $primo = falso;
                }
                $divisor++;
            }
            return $primo;
        }
    }
echo esprimo($numero);
?>