<?php
        //Definición de variables
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $mayor = 0;
    $menor = 0;
        //Ejercicio
    if($num1 > $num2){
            if($num1 > $num3){
                    $mayor = $num1;
            }else{
                    $mayor = $num3;
            }
    }else{
            if($num2 > $num3){
                    $mayor = $num2;
            }else{
                    $mayor = $num3;
            }
    }
    if($num1 < $num2){
            if($num1 < $num3){
                    $menor = $num1;
            }else{
                    $menor = $num3;
            }
    }else{
            if($num2 < $num3){
                    $menor = $num2;
            }else{
                    $menor = $num3;
            }
    }
    if($menor == $mayor){
            echo "los numeros son iguales";
    }else{
            echo "El numero mayor es $mayor";
            echo "<br><br>";
            echo "El numero menor es $menor";
    }
?>
