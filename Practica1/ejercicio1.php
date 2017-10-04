<?php
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$num3=$_POST["num3"];
echo "El número 1 vale $num1. <br/>";
echo "El número 2 vale $num2.<br/>";
echo "El número 3 vale $num3. <br/>";
if($num1 > $num2){
            if($num1 > $num3){
                    $mayor = $num1;
		    $mayor2 = $num3;
            }else{
                    $mayor = $num3;
		    $mayor2 = $num1;
            }
    }

else{
            if($num2 > $num3){
                    $mayor = $num2;
		    $mayor2 = $num3;
            }else{
                    $mayor = $num3;
		    $mayor2 = $num2;
            }
    }
    if($num1 < $num2){
            if($num1 < $num3){
                    $menor = $num1;
            }
		else{
                    $menor = $num3;
           	    }
   	    }
	else{
            if($num2 < $num3){
                    $menor = $num2;
            }else{
                    $menor = $num3;
            }
    }
echo "El número mayor es $mayor.<br/>";
echo "El número mediano es $mayor2 .<br/>";
echo "El número menor es $menor.<br/>";
?>
