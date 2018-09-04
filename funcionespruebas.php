<?php
    function calcularonda($totaljugadores) {
        if ($totaljugadores < 4 || $totaljugadores > 128) {
            die("Número de participantes incorrecto");
        }
        elseif ($totaljugadores <= 8 && $totaljugadores > 4) {
            $rondamax = (int) 3;
        }
        elseif ($totaljugadores <= 16 && $totaljugadores < 8) {
            $rondamax = (int) 4;
        }
        elseif ($totaljugadores <= 32 && $totaljugadores > 16) {
            $rondamax = (int) 5;
        }
        elseif ($totaljugadores <= 64 && $totaljugadores > 32 ) {
            $rondamax = (int) 6;
        }
        elseif ($totaljugadores <= 128 && $totaljugadores > 64){
            $rondamax = (int) 7;
        }
        return $rondamax;
    }

?>