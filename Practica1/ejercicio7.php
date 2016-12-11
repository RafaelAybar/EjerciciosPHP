<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio6</title>
        <style>
            h1 { font-size: 29px; font-family: Verdana; color:  #000000; }
            h4 { font-size: 20px; font-family: Verdana; color:  #000000; background: #efefef;}
            td { font-size: 15px; font-family: Verdana; color:  #000000; background: #efefef; }
            table{ border-collapse: collapse; box-shadow: 8px 8px 16px #cccccc; }
</style>
    </head>
    <body>
    <?php
$tabla = "<table border='1'>";
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
    </body>
</html>