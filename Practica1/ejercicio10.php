<?php
    //declaramos las variables
    //la función strtotime convierte la fecha en formato inglés a UNIX
    $fecha = strtotime($_POST['fecha']);
    $fechaini = strtotime("2016-01-01");
    $fufech = $_POST['fecha'];
    echo "La fecha introducida es $fufech </br>";
    //Ejercicio
    function diferencia($fufech1,$fufech2){
        //La función floor devuelve el siguiente valor de tipo integer
        //redondeando value si fuerea necesario
        return floor( ($fufech1-$fufech2)/(60*60*24) );
    }
    echo "El número de días transcurridos desde el 1 de Enero es: ".diferencia($fecha,$fechaini)." días";
?>