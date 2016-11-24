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