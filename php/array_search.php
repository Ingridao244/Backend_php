<?php 

//cria um array chamado frutas contendo tres elementos: "morango", "uva" e "mamão".
$frutas = array("morango", "uva", "mamão");

//procura o valor "morango" no array frutas e armazena o indice correspondente na variavel indice.
$indice = array_search("morango",$frutas);

//verifica se o indice não é igual a false, o que significa que "morango" foi encontrada no array.
if ($indice !== false {
    //Se "morango" foi encontrada, exibe a mensagem com o indice onde ele esta localizada.
    echo "morango foi encontrada na posição: " .$indice;
} else {
// Se "morango" não for encontrada, exibe uma mensagem indicando isso.
echo "morango não foi encontrada na lista de frutas.";
}

?>