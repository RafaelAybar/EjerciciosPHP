<?php
    $nombre = $_POST['nombre'];
    setcookie($nombre, time()+3600);
    echo "Tu nombre es $nombre";
?>