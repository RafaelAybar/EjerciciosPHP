<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style>
            table{border:3px solid black;}
            #a{color: black; background: grey; text-align: center; width: 50px;height: 20px}
        </style>
    </head>
    <body>
        <table border="1">
            <h4>
<?php
    //Declaramos el número de filas y columnas así como iniciamos el número a incrementar
    $columnas = 8;
    $filas = 8;
    $num = 1;
    //Generamos el bucle
 for($b=0;$b<$filas;$b++){
  echo "<tr>";
    for($j=0;$j<$columnas;$j++){
       if ($num % 2) {
          echo "<td id='a'>".$num."</td>";
       }
       else {
            echo "<td id='a'>".$num."</td>";
       }
       
        $num++;
   }
   }
   echo "</tr>";
  ?>
    </h4>
        </table>
    </body>
</html>
