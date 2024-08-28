<?php

$numeros = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];


echo '<pre>';
print_r ($numeros);
echo $numeros[0];
echo "<hr>";
echo '<pre>';

echo '<pre>';
//Alterando o valor 0 -> 
$numeros [0]= '100';
$numeros [4]= '500';
$numeros [9]= '1000';
print_r ($numeros);
echo $numeros[0];
echo "<br>";
echo $numeros[4];
echo "<br>";
echo $numeros[9];
echo '<pre>';

echo '<pre>';


?>
