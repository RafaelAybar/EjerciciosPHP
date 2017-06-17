<?php
    $njuan = round($_POST['juan']);
    $nmaria = round($_POST['maria']);
    $njose = round($_POST['jose']);
        //Definimos el array que contendrá las notas y los nombres de los alumnos
        $arrayinicial = array('Juan'=> $njuan, 'María'=> $nmaria, 'Jose'=>$njose);
        $notamedia = round(array_sum($arrayinicial)/count($arrayinicial),2);
        
        if ($notamedia > 10 || $notamedia < 0) {
            die("Debes introducir datos lógicos, es del del 0 al 10");
        }
        else {
             echo "La nota media es $notamedia </br>";
             //Comprobamos quién tiene la nota más alta:
             foreach ($arrayinicial as $key => $notamax) {
                 if ($notamax == max($arrayinicial)) {
                     $estudioso= max($arrayinicial);
                     echo "$key ha sacado la nota más alta,"." un $estudioso </br>";
                 }
             }
             //Comprobamos los que han sacado un 0
            function ceros(array $arrayinicial) { 
                $i = 0;
                foreach ($arrayinicial as $llave => $x) 
                if ($x == 0)
                $i++;
                return $i; 
                }
                $ceros = ceros($arrayinicial);
            echo "Han sacado un 0 ".$ceros." personas </br>";

            //Comprobamos los que han sacado un 2
            function unos(array $arrayinicial) { 
                $i = 0;
                foreach ($arrayinicial as $llave => $x) 
                    if ($x == 1)
                    $i++;
                    return $i; 
                    }
                    $unos = unos($arrayinicial);
                    echo "Han sacado un 1 ".$unos." personas </br>";
        }
            
        
?>