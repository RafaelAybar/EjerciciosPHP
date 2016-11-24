<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio4</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="default.css">
    </head>
    <body>
        <h3>
            <table>
                <tr>
                    <td>El número es:</td>
                </tr>
                <tr>
                    <td>
        <?php
        //definimos las variables
        $arrayvalor = array();
        $c = 0;
        while ($c <= 6) {
            $nurand = mt_rand(1, 49);
            //Según la documentación de PHP oficial la funcion mt_rand es mas eficiente
            if (!in_array($nurand,$arrayvalor)) {
                array_push($arrayvalor,$nurand);
                //array_push inserta uno o más elementos al final y pricipio de un array
                echo "$nurand";
                $c++; 
                         }
                    }
        ?>
                    </td>
                </tr>
        </table>
        </h3>
    </body>
</html>