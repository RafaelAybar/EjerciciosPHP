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
                <td>Subir imagen <input type="file" name="subir"></td>
                <td>Hora <input type="datetime" name="hora"> </td>
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
                        <select>
                        <option value="marrones">Marrones</option>
                        <option value="verdes">Verdes</option>
                        <option value="negros">Mercedes</option>
                        <option value="azules">Azules</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Hobbies: </br>
                    Ocio <input type="checkbox" name="musica"></td></br>
                    Deporte<input type="checkbox" name="deporte"></br>
                    

            </tr>
        </table>
        <?php
        ?>
    </body>
