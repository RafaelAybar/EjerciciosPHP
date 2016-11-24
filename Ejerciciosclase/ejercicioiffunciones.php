<html>
	<head><head>
	<body>
<?php
	$n = 2;
	echo "el número inicial es $n y ";
	if ($n == 0) {
		$n = pow($n,1);
		echo  "el número es $n";
	}
	elseif ($n < 0) {
		$n = abs($n);
		echo "el número es $n";
	}
	else {
		$n = pow($n,3);
		echo "el número es $n";
	}
?>
	</body>
	</html>