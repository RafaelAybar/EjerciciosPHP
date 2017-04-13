<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
         <style type="text/css">
            h2 { font-size: 29px; font-family: Verdana; color:  #000000; }
            td { font-size: 15px; font-family: Verdana; color:  #000000; background: #efefef; }
            table{ border-collapse: collapse; background:#efefef}
            #submit {font-size:35px; font-weight: bold; padding: 46px; margin: 10px 10px 20px 0; background: #80de80;
                     border-radius: 8px 8px 8px 8px; }
        </style>
    </head>
    <body>
        <center>
        <h2>Formulario validado por campos</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <table>
                 <tr>
                     <td>Nombre:</td>
                 </tr>
                 <tr>
                     <td><input type="text" name="nom" required></td>
                 </tr>
                 <tr>
                     <td>Correo:</td>
                 </tr>
                 <tr>
                     <td><input type="email" name="correo" required></td>
                 </tr>
                 <tr>
                     <td>Tecnologías:</td>
                 </tr>
                 <tr>
                     <td>PHP<input type="radio" name="radio" value="PHP" checked>
                     HTML<input type="radio" name="radio" value="HTML">
                     CSS <input type="radio"name="radio" value="CSS"></td>
                 </tr>
                 <tr>
                     <td>Mensaje:</td>
                 </tr>
                 <tr>
                     <td><textarea rows="15" cols="25" name="texto"></textarea></td>
                 </tr>
                 <tr>
                     <td>Resumen: <input type="file" name="resumen" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enviar" id="submit"></td>
                </tr>
             </table>
    </center>
    </body>
</html>
<?php
    $nombre = trim($_POST['nom']);
    $correo = trim($_POST['correo']);
    $texto = trim($_POST['texto']);
    $archivo = $_POST['resumen'];
    $radio = $_POST['radio'];
if (isset($nombre) && isset($correo) && isset($texto) && isset($archivo) && isset($radio)){
    //sripcslashes evita que nos cuelen código
    stripcslashes($nombre);
    stripcslashes($correo);
    stripcslashes($texto);
    echo "El nombre es $nombre, tu email es $correo,has seleccionado $radio, has subido el archivo $archivo y el texto introducido es:"."</br>";
echo "$texto";
}
else {
    die("No has introducido los campos obligatorios");
}
?>