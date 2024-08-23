<?php
$tabu="Tabuada";
echo "$tabu <br>";

//Declarando função
function vezes($num){
    //chamando o for para a função
    for($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        //Texto que aparecera no site
        echo "$num x $i = $resultado <br>";
    }
}
// declarando valor da tabuada
$num = 2;
vezes($num);
?>