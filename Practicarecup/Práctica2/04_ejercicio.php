<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Dados </title>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Lanzamiento de dados del jugador 1:<input type="checkbox" name="dado1" required>
        Lanzamiento de dados del jugador 2:<input type="checkbox" name="dado2" required><br>
        <input type="submit" value="Enviar"><br>
        <?php
            $dado1 = $_POST['dado1'];
            $dado2 = $_POST['dado2'];
            if (isset($dado1)&& isset($dado2)) {
             $tirada1 = mt_rand(1,6) + mt_rand(1,6);
                echo "La tirada del jugador 1 es $tirada1 </br>";
                $tirada2 = mt_rand(1,6) + mt_rand(1,6);
                echo "La tirada del jugador 2 es $tirada2 </br>";
                    if ($tirada1 < $tirada2) {
                        echo "El jugador 2 gana";
                    }
                    elseif ($tirada1 == $tirada2) {
                        echo"Empate";
                    }
                    else {
                        echo "El jugador 1 gana";
                    }
            }
            else {
                die("Ambos judadores deben lanzar dados");
            }
        ?>
    </body>
</html>
