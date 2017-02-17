<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Mi primer script en PHP</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td> Mostrar imagen<input type="image" name="imagen"></td>
                <td>Subir rchivos <input type="file" name="subir"></td>
                <td>Hora <input type="time" name="hora"> </td>
            </tr>
            <tr>
                <td>Nombre Completo <input type="text" name="ape"></td>
                <td>Usuario <input type="text" name="usu"></td>
                <td>Contraseña <input type="password" name="pass"></td>
                <td> Valor oculto <input type="hidden" name="contra"></td>
            </tr>
            <tr>
                <td>E-mail <input type="email" name="email"></td>
                <td>Teléfono <input type="tel" name="telef"></td>
                <td>Peso <input type="number" name="peso"></td>
                <td> Altura <input type="number" name="alt"></td>
            </tr>
            <tr>
                <td>Fecha nacimiento <input type="date" name="fenac"></td>
                <td>Color Favorito <input type="color" name="color"></td>
                <td>Color Ojos 
                        <select multiple name="coloroj[]">
                        <option value="marrones">Marrones</option>
                        <option value="verdes">Verdes</option>
                        <option value="negros">Mercedes</option>
                        <option value="azules">Azules</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Hobbies: </br>
                    Música <input type="checkbox" name="hobby[]"></br>
                    Deporte<input type="checkbox" name="hobby[]"></br>
                    TV <input type="checkbox" name="hobby[]"> </br>
                    Cine <input type="checkbox" name="hobby[]"></br>
                    Naturaleza <input type="checkbox" name="hobby[]"></br>
                </td>
                <td>Sexo: 
                Hombre<input type="radio" name="sex[]" value="Hombre">
                Mujer<input type="radio" name="sex[]" value="Mujer">
                </td>
            </tr>
            <tr>
                <td>
                    Comentarios:<textarea rows="25" cols="25" name="texto"></textarea></td>
            </tr>
            <tr><td><input type="submit" value="Enviar"><input type="reset" value="Reiniciar datos"></td>
            </tr>
        </table>
        <?php
            
           $imagen = $_POST['imagen'];
            $subir = $_POST['subir'];
            $hora = $_POST['hora'];
            $ape = $_POST['ape'];
            $usuario = $_POST['usu'];
            $pass = $_POST['pass'];
            $oculto = $pass;
            $email = $_POST['email'];
            $telefono = $_POST['telef'];
            $peso = $_POST['peso'];
            $altura = $_POST['alt'];
            $fenac = $_POST['fenac'];
            $colorfav = $_POST['color'];
            $hobbies = implode($_POST['hobby']);
            $sex = implode($_POST['sex']);
            $coment = $_POST['texto'];
            if (isset ($imagen) && isset($subir) && isset($hora) && isset($altura) && isset($ape)&& isset($fenac) && isset($pass)&& isset($peso) && isset($colorfav)&& isset($coloroj)&& isset($telefono)&& isset($coment)&&isset($sex)) {
                echo " $imagen</br>";
                echo "$subir</br>";
                echo "Fecha nacimiento $fenac</br>";
                echo "$ape</br>";
                echo "El nombre de usuario es$usuario</br>";
                echo "La contraseña es $pass</br>";
                echo "El campo oculto es  $oculto</br>";
                echo "El nº de teléfono es $telefono</br>";
                echo "El peso es $peso</br>";
                echo "La altura es $altura </br>";
                echo "La hora introducda es $hora</br>";
                echo "El color favorito es $colorfav</br>";
                echo "El color de ojos es $coloroj</br>";
                echo "Tu sexo es $sex</br>";
                echo "Tu opinión es $coment</br>";
            }
            else {
                echo "Debes rellenar todos los campos";
            }
        ?>
    </body>
