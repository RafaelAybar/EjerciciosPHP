<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Programación en PHP</title>
    </head>
<body>
    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         echo "Estamos usando POST";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
         echo "Estamos usando GET";
         //ESTA es la opción por defecto
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
         echo "Estamos usando PUT";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
         echo "Estamos usando DELETE";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'TRACE') {
         echo "Estamos usando TRACE";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
         echo "Estamos usando HEAD";
     }
     elseif ($_SERVER['REQUEST_METHOD'] == 'CONNECT') {
         echo "Estamos usando CONNECT";
     }
     else {
         echo "No estamos usando nada";
     }
     echo $_SERVER['DOCUMENT_ROOT']; 
    ?>
</body>
</html>
