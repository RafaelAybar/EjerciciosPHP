<?php
    //Declaración
    $a = 3;
    echo "$a   <br>";
    //Tipo
    //Ámbito == lugar donde puedes acceder a la variable
    //Variables predefinidas ---`
    //Variables globales     ----- TIPOS
    //Variables superglobales----´
    function variable (){
        $a = 5; #variable local
    //globalb
        echo $a;
    }
    echo variable()."<br>";
    //$_SERVER variable superglobal
    // Constante global -> establecido por el sistema
    echo __FILE__."<br>";
    echo __LINE__."<br>";
    echo PHP_OS;
?>