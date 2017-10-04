<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Programación en PHP</title>
    </head>
<body>
    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         echo "Estamos usando POST </br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
         echo "Estamos usando GET </br>";
         //ESTA es la opción por defecto, aunque no hayamos seleccionado nada
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
         echo "Estamos usando PUT </br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
         echo "Estamos usando DELETE </br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'TRACE') {
         echo "Estamos usando TRACE </br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
         echo "Estamos usando HEAD </br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'CONNECT') {
         echo "Estamos usando CONNECT</br>";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'CONNECT') {
         echo "Estamos usando CONNECT</br>";
     }
     elseif ( $_SERVER['HTTP_COOKIE'] == 'HTTP_COOKIE') {
         echo "Comprobamos las cookies";
     }
     else {
         echo "No estamos usando nada </br>";
     }
     echo $_SERVER['DOCUMENT_ROOT'];
     echo "</br>";
     echo $_SERVER['HTTP_USER_AGENT'];
     echo "</br>";
     //con getcwd obtenemos el directorio actual
     echo getcwd();
     echo "</br>";
?>
</body>
</html>
