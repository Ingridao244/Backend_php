<?php
//Declarando variaveis
$i=40;
$contador= 1;
//Usando o se para ver se é par
if($i>0){
    while ($contador <= $i ){
        if ($contador %2 == 0)
        echo " O contador par é:  $contador<br>";
        $contador++;
    }
}

else{
    echo "não é par !";
}
?>