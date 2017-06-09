<!DOCTYPE HTML>
<HTML>
<HEAD> <TITLE> 01_ejercicio Francisco Cañadas </TITLE> </HEAD>
<BODY>
<?php

/* 1. (4 puntos) Realiza un script PHP llamado “01_ejercicio.php” que defina 3 tipos de arrays diferentes:
indexado, asociativo y bimensional, un tipo diferente para cada apartado y recorrerlos con foreach:
a) Crea un array indexado para almacenar las marcas de coches que se muestran en la figura y
represéntalas en una tabla.

b) Crea un array asociativo para almacenar los modelos de las marcas de coches que se muestran en
la figura y cuyo clave son las propias marcas de ese vehículo representándolos en una tabla.

c) Crea un array bidimensional (array de arrays) para almacenar la marca de vehículos junto con los
modelos de esa marca y permita mostrarlo en una tabla, donde el primer array representará la
marca de vehículos y el segundo array los diferentes modelos del vehículo.

d) Aplícale diferentes estilos a las tablas: sobre <table>, sobre <tr>, sobre <th> y sobre <td> (menos el
uso del color).
*/

// INDEXADO

echo "<h3><b>Marca de coches: Indexado</b></h3>";

$cochesindex=array("BMW","Toyota","Mercedes","Audi","Seat","Alfa_Romeo");

echo "<table border=1>";
echo	"<tr>";
echo		"<td><b> Nombre de la Marca</b></td>";
echo	"</tr>";
		
//echo	"<tr>";
		
		foreach ($cochesindex as $i){
				echo "<tr><td> $i </td></tr> ";
				} 
	
//echo	"</tr>";
echo "</table> <br><br><br>";

// ASOCIATIVO

echo "<h3><b>Marca de coches: Array asociativo </b></h3>";

$cochesindex=array("BMW"=>320,"Toyota"=>"Avensis","Mercedes"=>"C","Audi"=>"A4","Seat"=>"Ibiza","Alfa_Romeo"=>147);
/*
$cochesindex["BMW"]=320;
$cochesindex["Toyota"]="Avensis";
$cochesindex["Mercedes"]="C";
$cochesindex["Audi"]="A4";
$cochesindex["Seat"]="Ibiza";
$cochesindex["Alfa_Romeo"]=147;
*/
echo "<table border=1>";
echo	"<tr>";
echo		"<td><b> Nombre de la Marca</b></td>";
echo		"<td><b> Modelo</b></td>";

echo	"</tr>";
		
//echo	"<tr>";
		
		foreach ($cochesindex as $i => $modelo){
				echo "<tr>";
				echo"<td> $i </td>"; 
				echo"<td> $modelo </td>";
				echo"</tr>";
				
				} 
	
//echo	"</tr>";
echo "</table>";

// Bidimensional

echo "<h3><b>Marca de coches: Array bidimensional </b></h3>";


$cochesindex = array ("Ford"=>array("modelo"=>"Fiesta","Focus","Mondeo"),
					  "Seat"=>array("modelo"=>"Ibiza","Cordoba","Toledo"),
					  "Wolkswagen"=> array("modelo"=>"Polo","Golf","Passat"),
					  "Audi"=>array("modelo"=>"A3","A4","A6"),
					  "Toyota"=>array("modelo"=>"Auris","Corola","Sedan"),
					  "Mercedes"=>array("modelo"=>"Clase A","Clase B","Clase C"));



echo "<table border=1>";
echo	"<tr>";
echo		"<td><b> Marca de Coche</b></td>";
echo		"<td><b> Modelo 1</b></td>";
echo		"<td><b> Modelo 2</b></td>";
echo		"<td><b> Modelo 3</b></td>";


echo	"</tr>";
							  
echo	"<tr>";
					  
foreach ($cochesindex as $marca => $modelo){
	
	
	echo "<td>$marca:<br></td>";
	
	while (list($clave,$valor)=each($modelo)){
		
		
		echo "<td>$valor</td> ";
		
		
	}
echo "</tr>";	
}


echo "</table>";
?>























</BODY>
</HTML>