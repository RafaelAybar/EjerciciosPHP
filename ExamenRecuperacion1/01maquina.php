<?php
	$precio = $_POST["num1"];
	$monedas = $_POST["num2"];
echo "<h2> Funcionamiento de una maquina de refrescos </h2>";
echo "PRECIO REFRESCO : $precio centimos<br/>";
echo "CANTIDAD PAGADA : $monedas centimos<br/>";
 $devolucion = $monedas - $precio;
 echo "La vuelta a recibir en centimos es : $devolucion centimos<br/>";
$cambio=array(200, 100, 50, 20, 10, 5);
 
$devolver=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
 
for($i=0; $i<count($cambio); $i++)
{
    if($devolucion>=$cambio[$i])
    {
 
        $devolver[$i]=floor($devolucion/$cambio[$i]);
 
        $devolucion=$devolucion-($devolver[$i]*$cambio[$i]);
    }
}
 
for($i=0; $i<count($cambio); $i++)
{
    if($devolver[$i]>0)
    {
        	echo "El cambio es de: ".$devolver[$i]." monedas de ".$cambio[$i]." centimos.<br>";
    
    }
}