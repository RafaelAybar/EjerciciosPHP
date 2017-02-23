<?php

$nombres = array("Pepe", "Carlos", "Jesús", "Lola", "Rosa", "Maria");
$apellidos1 = array("Martin", "Lopez", "Salas", "Mateo", "Abas", "De Diego");
$apellidos2 = array("Quesada", "Alcala", "Marín", "Suarez", "Cobos","Rios");

$randn = array_rand($nombres);
$radn2 = array_rand($apellidos1);
$rand3 = array_rand($apellidos2);
echo "Nombre aleatorio ". $nombres[$randn] 
    ." apellido aleatorio ". $apellidos1[$radn2] 
    ." segundo apellido aleatorio ". $apellidos2[$rand3];
?>