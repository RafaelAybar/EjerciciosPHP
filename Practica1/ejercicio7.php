<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 7</title>
        <style>
            h4 { font-size: 20px; font-family: Verdana; color:  #000000; background: #efefef;}
            td { font-size: 20px; font-family: Verdana; color:  #000000; background: #efefef; }
            table{ border-collapse: collapse; box-shadow: 16px 16px 16px #cccccc; }
</style>
 </head>
 <body>
     <h4>
        <?php
    $tabla = "<table border='2'>";
    $tabla .= "<tbody>";
    for($i = 0; $i<10;$i++){
        $tabla .= "<tr>";
        for($j = 0; $j<10;$j++){
            if($i == $j){
                $tabla .= "<td>";
                $tabla .= "1";
                $tabla .= "</td>";
            }else{
                $tabla .= "<td>";
                $tabla .= "0";
                $tabla .= "</td>";
            }

        }
        $tabla .= "</tr>";
    }
    $tabla .= "</tbody>";
    $tabla .= "</table>";

    echo $tabla;
    ?>
</h4>
</body>
</html>