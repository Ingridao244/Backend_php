<?php

//Criando a Array Cadastro
$cadastro = [];

//criando uma array nome, dentro da array cadastro
$cadastro ['nome'] = ['ingrid','emanuela','leticia','daniel','pedro'];

//criando uma array Email, dentro da array cadastro
$cadastro ['email'] = ['Ingrid.sepulvedra@gmail.com', 'Emanuela.luiz@gmail.com', 'Leticia.grando@gmail.com', 
'Daniel.oliveira@gmail.com', 'Pedro.almeida@gmail.com'];

//exibir todo conteúdo
echo '<pre>';
print_r ($cadastro);
echo '<br>';

//alterando o segundo valor a array nome
$cadastro['nome'][2]='Senai';

//alterando o valor 0 da array Email
$cadastro ['email'] [0]='aluno@senail.br';


echo "<hr>";

echo "O segundo valor da array nome agora é:  ";
echo $cadastro ['nome'][2];

echo "<br>";

echo "O valor 0 da array email agora é: ";
echo $cadastro['email'][0];


//exibindo o quarto indice da subarray email
echo '<pre>';
print_r($cadastro);
echo '</pre>';

?>