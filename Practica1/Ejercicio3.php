<?php
	//Declaración de variables
	$numero = $_POST['num'];
	$operacion = $_POST['operacion'];
	//Ejercicio
	echo "El número introducido es $numero <br/>";
	if ($operacion == 1) {
		$resultado = sqrt($numero);
		echo "La raíz cuadrada es $resultado";
	}
	elseif ($operacion == 2) {
		$resultado2 = decbin($numero);
		echo "El número en binario es $resultado2";
	}
	elseif ($operacion == 3) {
		$resultado3 = dechex($numero);
		echo "El número en hexadecimal es $resultado3";
	}
	elseif ($operacion == 5) {
		$porcen = $numero*0.1;
		echo "El porcenje de ese número es $porcen";
	}
	elseif ($operacion == 4) {
		$abs = abs($numero);
		echo "El valor absoluto es $abs";
	}
	else {
		echo "Deberías de haber seleccionado algo";
	}
?>
