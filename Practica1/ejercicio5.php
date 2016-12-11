<?php
//Definición de variables
$entrada = (string) $_POST['fecha1'];
$fechafija = (string) "2016-01-01";
echo "$entrada <br/>";
echo "$fechafija <br/>";
$diaentrada =  substr($entrada, 8, 9);
$diafijo =  substr($fechafija, 8, 9);
$mes = substr($entrada, 5, -3);
$numentrada = (int) $diaentrada;
$numfijo = (int) $diafijo;
//Ejercicio (2016 es bisiesto)
echo "$numentrada y $numfijo el número de mes es $mes <br/>";
switch ($mes) {
	case '1':
			$dif = $diaentrada - $diafijo;
			echo "Han pasado $dif días";
		break;
		case '2':
			$dif2 = $diaentrada - $diafijo +29;
			echo "han pasado $dif2 días";
			break;
		case '3':
			$dif3 = $diaentrada - $diafijo +29+31;
			echo "Han pasado $dif3 días";
			break;
		case '4':
			$dif4 = $diaentrada - $diafijo +30+31+29;
			echo "Han pasado $dif4 días";
			break;
		case '5':
			$dif5 = $diaentrada - $diafijo +30+31+29+31;
			echo "Han pasado $dif5 días";
			break;
		case '6':
			$dif6 = $diaentrada - $diafijo +30+31+29+31+30;
			echo "Han pasado $dif6 días";
			break;
		case '7':
			$dif7 = $diaentrada - $diafijo +30+31+29+30+30+31;
			echo "Han pasado $dif7 días";
			break;
		case '8':
			$dif6 = $diaentrada - $diafijo +30+31+29+30+30+31+30;
			echo "Han pasado $dif8 días";
			break;
		case '9':
			$dif9 = $diaentrada - $diafijo +30+31+29+31+30+31+30+31;
			echo "Han pasado $dif9 días";
			break;
		case '10':
			$dif10 = $diaentrada - $diafijo +30+31+29+30+31+31+30+31+31;
			echo "Han pasado $dif10 días";
			break;
		case '11':
			$dif11 = $diaentrada - $diafijo +30+31+29+30+31+31+30+31+31+30;
			echo "Han pasado $dif11 días";
			break;
		case '12':
			$dif12 = $diaentrada - $diafijo +30+31+29+30+31+31+30+31+31+30+31+19;
			echo "Han pasado $dif12 días";
			break;
	default:
		echo "No funciono :D";
		break;
}
?>