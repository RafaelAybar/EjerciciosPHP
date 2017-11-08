<?php
    $conexion = mysqli_connect("localhost", "root", "", "ies")or die("No se pudo conectar");
    echo "Se ha conectado con éxito <br>";
    echo "Las listas de bd que tenemos son: <br>";
    //consultas
    $consulta1 = "CREATE DATABASE secretaria";
    $consulta2 = "SHOW DATABASES";
    $consulta = "SELECT * FROM alumno";
    //Ejecución
    $crearbd = $conexion -> query($consulta1) or die("error en la creación");
    $listabd = $conexion -> query($consulta2) or die("Error en la consulta");
    $resultado = $conexion -> query($consulta) or die("Error de consulta 2");
    
    while ($col = $listabd -> fetch_assoc()) {
       echo $col['Database']."<br>";
    }
    echo "<table border>";
    while ($columna = $resultado -> fetch_assoc()) {
        $datos = $columna['dni']." ".$columna['nombre']." ".$columna['edad']." ".$columna['provincia']."<br>";
         echo "<tr><td>$datos</td></tr>";
     }
     echo "</table>";
    //Cierre
    $consulta1 -> close();
    $consulta2 -> close();
    $consuslta -> close();
    $conexion -> close();
    
    
    
?>