<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Ejercicio de clase</title>
</head>
<body>
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
    
    //ojo a fetch_row
    while ($col = $listabd -> fetch_assoc()) {
       echo $col['Database']."<br>";
    }
    echo "<table border>";
    while ($columna = $resultado -> fetch_assoc()) {
        $datos = "<tr><td>".$columna['dni']." </td></tr><tr><td>".$columna['nombre']." <tr><td>".$columna['edad']."</td></tr><tr><td> ".$columna['provincia']."</td></tr><br>"; 
        echo $datos;
    }
     echo "</table>";
    //Cierre
    $consulta1 -> close();
    $consulta2 -> close();
    $consuslta -> close();
    $conexion -> close();
?>
</body>
</html>
