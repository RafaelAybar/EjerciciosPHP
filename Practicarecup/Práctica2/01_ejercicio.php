<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Operaciones</title>
    </head>
    <body>
    <p> Para comprobar que los valores introducidos, especificiamos esa condición en el formulario</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td> Inserta el valor de A:</td> <td><input type="number" name="a" required ></td>
        </tr>
        <tr>
            <td> Inserta el valor de B:</td><td><input type="number" name="b" required></td>
        </tr>
        <tr>
            <td> <input type="submit" value"Enviar"><input type="reset" value="Reestablecer"></td>
        </tr>
    </table>
    </form>
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $a = $_POST['a'];
            $b = $_POST['b'];
            //Apartado 1
            if (is_numeric($a) && is_numeric($b)){
                echo "Las variables introducidas son números </br>";
            }
            else {
                die("No has introducido números");
                
            }
            //Apartado 2
            echo "A es $a y B es $b </br>";
            //Apartado 3
            $suma = $a + $b;
            echo "La suma es $suma </br>";
            //apartado 4
            $producto = $a * $b;
            echo "El producto es $producto </br>";
            //Apartado 5
            $resta = sqrt($a) - pow($b,3);
            echo "El resultado es $resta </br>";
            //Apartado 6
            if ($b >= $a) {
               $restodi = $b % $a;
               echo "El resultado es $restodi </br>";
            }
            else {
                echo "B debe ser mayor que A </br>";
            }
            //Apartado 7
            if ($a > $b) {
                $ope1 = $a*5 / $b ;
                echo "El resultado es $ope1 </br>";
            }
            elseif ($b>$a) {
                $ope2 = $b *5 / $a;
                echo "El resultado es $ope2 </br>";
            }
            else {
                echo "Son iguales </br>";
            }
            //Apartado 8
            $div1 = (int) $a / $b * 0.66666;
            echo "El entero de la división es $div1 </br>";
            //Apartado 9
            $div2 = (float) $a / $b * 0.66666;
            echo "El resultado de la división es $div2 </br>";
            // Calculamos factorial de a
            function factorial($a) {          
            if ($a < 2) { 
                return 1; 
                } else { 
                    return ($a * factorial($a-1)); 
                } 
            }
            $facta = factorial($a);
            //Calculamos el factorial de b
           function factorial2($b) {          
            if ($b < 2) { 
                return 1; 
                } else { 
                    return ($b * factorial($b-1)); 
                } 
            }
            $factb = factorial2($b);
            //Apartado 10
            if ($a >= $b) {
                $ofact = $a / $factb;
                $reda = round($ofact,2);
                echo "El resulado de la división es  $reda </br>";
            }
            else{
                $ofact2 = $b / $facta;
                $redb = round($ofact2,2);
                echo "El resulado de la división es  $redb </br>";
            }
            //Apartado 11
            $nurand = mt_rand(min($a,$b),max($a,$b));
            echo "El número aleatorio es $nurand </br>";
            //Apartado 12
            $uma = min($a,$b)+max($a,$b);
            echo "La suma es $uma </br>";
            //Apartado 13        
                $sum = min($a,$b) + max($a,$b);
                echo "La suma de máximo y mínimo es $sum </br>";
            //Apartado 14
            $sumcos = cos($a)+cos($b);
            echo "La suma de los cosenos es $sumcos </br>";
            //Apartado 15
                $i = 0;
            while ($i <= 100) {
                $i++; 
                $a = $i+1;
                $b = $i+1;
                $ecu = sqrt(pow($a,3))+($b/pow($a,$b))+$b - (2*$a);
                echo "$ecu </br>";
            }
    ?>
    </body>
</html> 
