<?php
$n=$_POST['num'];
	echo "<h4>Tabla del". $n.":</h4>";
	$i = 1;
	while ($i <=10)	{
		echo "".$n. "x ".$i. "= ".$n*$i."</br>";
		$i++;
	}	
?>