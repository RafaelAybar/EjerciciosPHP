<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Encriptación </title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Campo a encriptar: <input type="password" name="pass" required><br>
        <input type="submit" value="enviar">
            <?php
             error_reporting(E_ERROR | E_WARNING | E_PARSE);
                $campo = $_POST['pass'];
                if (isset($campo)) {
                echo "Campo original : $campo </br>";
                $campomd5 = md5($campo);
                echo "El campo cifrado es $campomd5";
                }
                else {
                    die("No has introducido la contraseña");
                }
            ?>
    </body>
    </html>
