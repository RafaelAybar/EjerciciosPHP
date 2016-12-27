<?php
    //Declaramos la variable y forzamos a tipo cadena
    $nombrear =  $_POST['ext'];
    //Separamos la extensión del archivo que sigue a partir del punto
    echo " Tu archivo es $nombrear </br>";
    $trozo = explode(".", $nombrear);
    $exten = end($trozo);
    //Comprobamos cada valor posible de la extensión
    if ($exten == "pdf") {
        echo "Esta extensión pertenece a Acrobat Reader";
    }
    elseif ($exten == "odt") {
        echo "Esta extensión pertenece a un texto de Open Document";
    }
    elseif ($exten == "pptx") {
        echo "Esta extensión es de una presentación de Microsof Office";
    }
    else {
        echo "Esa extensión no está registrada";
    }
?>