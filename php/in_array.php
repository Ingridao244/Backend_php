<?php

//cria um array chamado frutas contendo tres elementos: "morango", "uva" e "mamão".
$frutas = array("morango", "uva", "mamão");

//verifica se morango esta presente no array frutas.
if (in_array("morango", $frutas)) {
//Se "morango" estiver no array, exibe a mensagem "Morango está na Lista de frutas.".
    echo "morango está na lista de frutas.";
} else {
// Se "morango" não estiver dispinivel no array, exibe a mensagm "Banana não está na lista de frutas.".
echo "morango não esta na lisra de frutas.";
}

?>