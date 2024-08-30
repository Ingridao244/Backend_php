<?php
//criando array 
$cadastro = [];
// array pessoas
$cadastro ['usuario'] = ['Joao', 'Maria', 'Pedro'];
//subarray senha
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "<hr>";

//alterando o terceiro valor da aray USUARIO
$cadastro['usuario'][1] = 'Ana';

//alterando o segundo valor da array SENHA
$cadastro['senha'][1] = 'efgh';

echo "O terceiro valor da array USUARIO agora é:  ";
echo $cadastro['usuario'][1];

echo "<br>";

echo "O terceiro valor da array SENHA agora é:  ";
echo $cadastro['senha'][1];

echo '<pre>';
print_r($cadastro);
echo '</pre>';
?>