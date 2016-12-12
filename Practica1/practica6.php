<?php
	//Declaración de variables
	$tiempo = $_POST['tiempo'];
	$porcen = $_POST['porcen'];
	$capital = $_POST['capital'];
	//Ejercicio
	for ($a=1; $a <= $tiempo ; $a++) {

		$interes = ($capital * $porcen)/100;
		$capital += ($capital * $porcen)/100;

		echo "El año es: $a</br>";
		echo "El interes anual obtenido es: $interes</br>";
		echo "El capital acumulado es: $capital</br>";
}
?>
