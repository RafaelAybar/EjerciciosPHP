<?php
    $texto = $_POST['texto'];
        $caracteres = strlen($texto);
        $vocales = substr_count($texto, 'a')+substr_count($texto, 'e')+substr_count($texto, 'i')+substr_count($texto, 'o')+substr_count($texto, 'u')+substr_count($texto, 'A')+substr_count($texto, 'E')+substr_count($texto, 'I')+substr_count($texto, 'O')+substr_count($texto, 'U');
        $a = substr_count($texto, 'a') + substr_count($texto, 'A');
        $e = substr_count($texto, 'e') + substr_count($texto, 'E');
        $i = substr_count($texto, 'i') + substr_count($texto, 'I');
        $o = substr_count($texto, 'o') + substr_count($texto, 'O');
        $u = substr_count($texto, 'u') + substr_count($texto, 'U');
        echo "El número total de caracteres es $caracteres <br/>";
        echo "El total de vocales es $vocales <br/>";
        echo "El numero de letras a (mayúsculas incluidas) es $a <br/>";
        echo "El numero de letras e (mayúsculas incluidas) es $e <br/>";
        echo "El numero de letras i (mayúsculas incluidas) es $i <br/>";
        echo "El numero de letras o (mayúsculas incluidas) es $o <br/>";
        echo "El numero de letras u (mayúsculas incluidas) es $u <br/>";
?>
