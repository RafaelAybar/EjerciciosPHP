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
    // Variables estáticas ()
    function prueba ()
    {
        $c = 0;
        $b = 0;
        echo "<br>";
        echo $b."<br>";;
        $c+=5;
        $b-=7;
        echo "$c y $b <br>";
    }
    function prueba1 ()
    {
        $c = 0;
        static $b = 0;
        echo "<br>";
        echo $c."<br>";;
        $c+=5;
        $b-=7;
        echo "$c y $b <br>";
    }
    echo prueba();
    echo "<br>";
    echo prueba1();
    echo "Segunda ejecución <br>";
    echo prueba();
    echo "<br>";
    echo prueba1();

    //Declarar variable de variable
    $color = "rojo";
    $$color = "es mi color favorito";
    //el valor es $rojo por que se coge el nombre del color
    //$color ="amarillo"; Se ejecuta la última
    print $$color;
    print ${$color};
    print $rojo;

?>