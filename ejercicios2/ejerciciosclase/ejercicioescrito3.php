<?php
    $conexion = mysqli_connect("localhost","root","","proyectos");
    
    $descartes = fopen("descartes.txt","r");
    $a = 0;
    //usar funcion file para volcar archivos en array
    $arrayfichero = file($descartes);
    $consulta = "SELECT codproyecto from proyectos" or die("error del select");
    $resultado = $conexion -> query($consulta);
    while ($columna = $resultado -> fetch_assoc()) {
        foreach ($columna as $nombre) {
            if (in_array($nombre, $arrayfichero)) {
                
            //la función in_array($valorabuscar,$arraydondesebusca) nos permite comprobar si el valor que queremos está en el array
                $consula2 = "DELETE FROM proyectos where nombre=".$nombre;
                $deleres = $conexion -> query($consula2) or die("error de borrado");
                echo "Se borraron los datos de $nombre";
            }
            else {
                echo "Todo en orden";
            }
        }
    }
    fclose($descartes);
    $resultado -> close();
    $deleteres -> close();
    $conexion -> close();
?>