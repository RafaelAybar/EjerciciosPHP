<?php
echo "Los arrays originales son </br>";
$nombres = array("Pepe", "Carlos", "Jesús", "Lola", "Rosa", "Maria");
$apellidos1 = array("Martin", "Lopez", "Salas", "Mateo", "Abas", "De Diego");
$apellidos2 = array("Quesada", "Alcala", "Marín", "Suarez", "Cobos","Rios");
    print_r($nombres);
    echo "</br>";
    print_r($apellidos1);
    echo "</br>";
    print_r($apellidos2);
    echo "</br>";


$nomalet = [mt_rand(0,5)] = array_merge($nombres,$apellidos1,$apellidos2);
print_r($nomalet);
?>