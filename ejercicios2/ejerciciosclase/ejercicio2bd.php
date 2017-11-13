<?php
    //1-Insertar tuplas
    $conexion = mysqli_connect("localhost", "root", "", "ies")or die("No se pudo conectar");

    $insert1 = "INSERT INTO alumno VALUES ('12A45678S','fran',6,'almeria')";
    $insert2 = "INSERT INTO asignatura VALUES ('iaaew','adso',3,3)";
    $insert3 = "INSERT INTO matricula VALUES ('2','3','2017-02-02',1)";
    $select = "SELECT count(nombre) from alumno inner join matricula on (matricula.dni = alumno.dni) where nota >= 5";
    
    $consulta1 = $conexion -> query($insert1) or die("Error en la consulta1");
    $consulta2 = $conexion -> query($insert2) or die("Error en la consulta2");
    $consulta4 = $conexion -> query($insert3) or die ("Error en la consulta3");
    $consulta5 = $conexion -> query($select) or die("Error del select");
    //2- Mostrar nº de alumnos aprobados.
    while ($columna = $consulta5 -> fetch_assoc()) {
        $resultaado = implode(" ",$columna);
        echo "El número de aprobados es ".$resultaado;
    }   
//3- Alumnos con nota entre 4.5 y 4.9 tendrán como nota 5
// El tipo de dato  de la nota se almacena como un entero, por lo que se redondea
// $update = "update matricula set nota =5 where (nota > 4 and nota <5)";
//$consulta6 = $conexion -> query($update) or die("Error al hacer update");
$consulta1 -> close();
$consulta2 -> close();
$consulta3 -> close();
$consulta4 -> close();
$consulta5 -> close();
$conexion -> close();
//4- Hacer un formulario para dado un alumno (dni) mostrar en tabla nombre,asig,nota,aprobado
?>