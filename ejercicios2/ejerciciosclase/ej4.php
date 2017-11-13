<?php
    if (isset($_POST['dni']) && is_string($_POST['dni']) && strlen($_POST['dni'])<=9) {
        $dni = $_POST['dni'];
        $conexion = mysqli_connect("localhost", "root", "", "ies")or die("No se pudo conectar");

        $consulta = "select alumno.nombre, asignatura.nombre, nota from alumno inner join matricula on (alumno.dni = matricula.dni) inner join asignatura on (asignatura.codas = matricula.codas) where alumno.dni = $dni";
        
        $select = $conexion -> query($consulta) or die("Error en la consulta");
        echo "Los datos del alumno son: <br>";
        while ($columna = $select -> fetch_assoc()) {
            $resultaado = implode(" ",$columna);
            if ($resultaado['nota'] > 5) {
                echo $resultaado. " suspenso ";
            }
            else {
                echo $resultaado. " aprobado ";
            }
        }
        $select -> close();
        $conexion -> close();
    }
    else {
        die("Introduce los datos correctamente");
    }
?>