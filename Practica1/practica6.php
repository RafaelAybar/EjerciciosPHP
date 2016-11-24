<?php
	//Declaración de variables
	$tiempo = $_POST['tiempo'];
	$porcen = $_POST['porcen'];
	$capital = $_POST['capital'];
	//Ejercicio
	if ($capital >= 0 && $tiempo >= 1 && $porcen >=1){
		echo "El capital inicial es $capital <br/>";
		echo "El tiempo es $tiempo <br/>";
		echo "El interés es del $porcen por ciento <br/>";
		$porcentaje = $porcen / 100;
		$intanual = $capital * $porcentaje * $tiempo;

		echo "El interés anual es $intanual <br/>";
		$capacumulado = $capital+$intanual;
		}
		else {
			echo "Introduce un valor válido";
		}
?>
