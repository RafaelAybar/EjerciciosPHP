
<?php

define("falso",0);
function esprimo ($numero)
        {
                $divisor=2;
                $primo=verdadero;
                while(($divisor<$numero) && ($primo==verdadero))
                        {
                        if ($numero%$divisor==0)
                                {
                                $primo=falso;
                                }
                        if ($numero==1)
                        {
                        $primo=falso;
                        }
                        $divisor++;
                        }
return $primo;
}
?>
