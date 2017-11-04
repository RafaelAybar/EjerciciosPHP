<?php

include "biblioteca.php";

$primosgenerados=0;
$numero=1;
while ($primosgenerados<10)
        {
                if (esprimo ($numero)==verdadero)
                {
                        echo $numero;
                        $primosgenerados++;

                }
        $numero++;
        }
?>
