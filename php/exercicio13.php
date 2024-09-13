<?php
//cria um array chamado nomes contendo 10 elementos.
$nomes = array("ingrid", "emanuela", "pedro", "daniel", "matheus", "ana", "lu", "helo", "ricardo", "leticia");

//procura o valor "pedro" no array nomes e armazena o indice correspondente na variavel indice.
$indice = array_search("pedro",$nomes);

//verifica se o indice não é igual a false, o que significa que "pedro" foi encontrada no array.
if ($indice != false) {
    //Se "pedro" foi encontrada, exibe a mensagem com o indice onde ele esta localizada.
    echo "pedro foi encontrada na posição: " .$indice;
} else {
// Se "pedro" não for encontrada, exibe uma mensagem indicando isso.
echo "pedro não foi encontrada na lista de nomes.";
}

?>