<?php
    echo "Lista1: bucle do ... while: ";
    //Declaramos la variable auxiliar
    $a = 0;
    do {
        echo "ASIR ";
        $a++;
    } while ($a <= 9);
echo "</br>";
echo "Lista2: bucle while: ";

$b = 0;
while ($b <= 9) {
    echo "DAM ";
    $b++;
}
echo "</br>";

echo "Lista3: bucle for: ";
for ($i=100; $i <= 110; $i++) { 
    echo "$i ";
}
echo "</br>";

echo "Lista4: bucle do... while:"."</br>";
$c = 0;
$letra = 'A';
echo "<ol>";
do {
    echo "<li>"."Modulo ".$letra."</li>";
    $c++;
    $letra++;
} while ($c <= 5);
echo "</ol>";
echo"</br>";

echo "Lista5: bucle while:"."</br>";
$d = 0; 
$letr = 'a';
echo "<ul>";
while ($d <= 5) {
   echo "<li>"."Nota ".$letr."</li>";
   $d++;
   $letr++;
}
echo "</ul>";
echo "</br>";

echo "Lista6: bucle for;"."</br>";
echo "<dl>";
for ($o=1; $o <=6 ; $o++) {
    $num = 1;
    echo "<dt>"."Modulo $o";
    echo "<dd>"."Nota $num"."</dd>";
}
echo "</dl>";
?>