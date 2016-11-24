    <!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="default.css">
        </head>
        <body>
            <?php
                //Array
                $array = array(0=>"Rafa",1=>"Adrian",2=>"Angel",3=>"Enrique",4=>"Dani",5=>"Ivan",6=>"Isa", 7=>"Fran1",8=>"Fran2",9=>"Diego");
                $elementos = implode(",", $array);
                echo "<h3>Los elementos introducidos son: $elementos </br><h3/>";
                //bucle foreach
                foreach ($array as $indice => $valor) {
                    if ((substr($valor, -1) == 's') || (substr($valor, -1) == 'i')){
                    $arrayResultados[] = $valor;
                    }
                }
                foreach($arrayResultados as $nombre){
                echo "<h3>Los nombres que acaban en s o i son los siguientes: $nombre </h3>";
                }
            ?>
        </body>
    </html>






















































