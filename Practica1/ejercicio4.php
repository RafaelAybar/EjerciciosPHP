<?php
$a = (int)$_POST['numa'];
$b = (int)$_POST['numb'];
$operaciones = $_POST['operacion'];
echo "Los números introducidos son: $a y $b <br>";
if (isset($operaciones)) {
    foreach($operaciones as $operacion){
        switch (true) {
            case ($operacion === "1"):
                $pot = pow($a, $b);
                echo "El resultado es $pot <br>";
                break;
            case ($operacion === "2"):          
                $prod = $a * $b;
                echo "El resultado es $prod <br>";
                break;
            case ($operacion === "3"):
                $div = $a / $b;
                echo "El resultado es $div <br>";
                break;
            case ($operacion === "4"):
                if ($a < $b) {
                    echo "El divisor debe ser mayor para que no de números incorrectos";
                }
                else {
                    $res = $a % $b;
                echo "El resto es $res <br>";
                }
                break;
            case ($operacion === "5"):
                echo $a > $b ? "a = $a es mayor que b = $b" 
                             : ($a < $b ? "a = $a es menor que b = $b" 
                             : "Son iguales a = $a y b = $b");
                break;
            default:
                echo "Ups..algo no ha ido bien!";
        }
    }
}
?>
