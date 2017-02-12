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
            error_reporting(E_ALL);
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
            $ope1 = (max($a,$b)* 5)/(min($a,$b));
            echo "$ope1 </br>";
            //Apartado 8
            $div1 = (int) $a / $b * 0.66666;
            echo "El entero de la división es $div1 </br>";
            //Apartado 9
            $div2 = (float) $a / $b * 0.66666;
            echo "El resultado de la división es $div2 </br>";
            if ($a >= $b) {
                $difact = $a / gmp_fact($b);
                $redon = round($difact);
                echo "El resultado es $redon </br>";
            } else {
                $difact2 = $b / gmp_fact($a);
                $redon2= round($difact2);
                echo "El resultado es $redon2 </br>";
            }
            //Apartado 10
            $nurand = mt_rand(min($a,$b),max($a,$b));
            echo "El número aleatorio es $nurand </br>";
            //Apartado 11
            $uma = min($a,$b)+max($a,$b);
            echo "La suma es $uma </br>";
        ?>
    </body>
</html> 