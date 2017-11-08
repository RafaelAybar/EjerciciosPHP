<?php
    $conexion = mysqli_connect("localhost", "root", "", "ies")or die("No se pudo conectar");
    echo "Se ha conectado con éxito <br>";
    echo "Las listas de bd que tenemos son: <br>";
    $consulta1 = "CREATE DATABASE secretaria";
    $consulta2 = "SHOW DATABASES";
    $crearbd = $conexion -> query($consulta1) or die("error en la creación");
    $listabd = $conexion -> query($consulta2) or die("Error en la consulta");
    while ($col = $listabd -> fetch_assoc()) {
       echo $col['Database']."<br>";
    }
    $consulta1 -> close();
    $consulta2 -> close();
    $conexion -> close();
   /* $consulta = "SELECT * FROM alumno";
    $resultado = $conexion -> query($consulta);
    while ($columna = $resultado -> fetch_assoc()) {
       $datos = $columna['dni']." ".$columna['nombre']." ".$columna['edad']." ".$columna['provincia']."<br>";
        echo "$datos";
    }*/
?>