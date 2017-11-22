<?php
    //Conectamos a la bd
    $conexion = mysqli_connect("localhost", "root", "", "ies")or die("No se pudo conectar");
    //Nombre y ruta del fichero
    $nombre = "'".$_SERVER['DOCUMENT_ROOT'].'/EjerciciosPHP/ejercicios2/alumnos2.txt'."'";
    echo $nombre;
    $consulta1= "LOAD DATA INFILE ";
    $consulta1 .= $nombre;
    $consulta1 .= " IGNORE INTO TABLE alumno"; //Equivale al insert
    $consulta1 .= " LINES TERMINATED BY '\r\n' ";
    $resultado1 = $conexion -> query($consulta1) or die("Error en la consulta");
    $resultado1->close();
    $conexion -> close();
    //hay que comprobar el error de mysql para cargar los ficheros
    //www.franriveshurtado.com/blog/
?>