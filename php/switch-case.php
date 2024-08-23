<?php
$corEscolhida = "Azul";

switch ($corEscolhida) {
    case "Azul":
        echo "Você escolheu a cor Azul.";
        break;
    case "Vermelho":
        echo "Você escolheu a cor Vermelho.";
        break;
    case "Verde":
        echo "Você escolheu a cor Verde.";
         break;
    default:
        echo "Cor não disponível.";
        break;    
}
?>