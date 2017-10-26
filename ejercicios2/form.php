<?php
    #echo "$_REQUEST";
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
    $beca = $_POST['beca'];
    echo "El alumno $nombre tiene una nota de $nota puntos. Adjudicación de beca: $beca ";
    #para pasar parámetros:
    #http:\\localhost\multiplica.php?a=1b=2 -> se esita registrer_globals = ON
$nurand=mt_rand(-getrandmax(),getrandmax());
echo "<br>";
echo "$nurand";
echo "<br>";
echo mt_getrandmax();
?>