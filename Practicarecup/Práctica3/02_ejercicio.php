<?php

$nombres = array("Pepe", "Carlos", "Jesús", "Lola", "Rosa", "Maria");
$apellidos1 = array("Martin", "Lopez", "Salas", "Mateo", "Abas", "De Diego");
$apellidos2 = array("Quesada", "Alcala", "Marín", "Suarez", "Cobos","Rios");

$randn = array_rand($nombres);
$radn2 = array_rand($apellidos1);
$rand3 = array_rand($apellidos2);
echo "<table>";
    echo "<tr>";
    echo "<td>";
echo "Nombre aleatorio ". $nombres[$randn] ;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
echo " Apellido aleatorio ". $apellidos1[$radn2]; 
    echo "</tr>";
    echo "</td>";
    echo "<tr>";
    echo "<td>";
echo " Segundo apellido aleatorio ". $apellidos2[$rand3];
    echo "</tr>";
    echo "</td>";
echo "</table>";
?>