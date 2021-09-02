<?php
for ($i = 1; $i < 16; $i++) {
    echo "#$i" . PHP_EOL;
}

//Pulando iterações
//Caso número seja ímpar, ele pula para o próximo laçom senão ele apresenta na tela o valor de $i
for ($i = 0; $i < 11; $i++) {
    if ($i % 2 != 0) continue;
    echo "#$i" . PHP_EOL;
}

//quebrando o laço, interrompendo
$limite = 10;
for ($i = 1; $i < $limite+1; $i++){
    if ($i > ($limite / 2)) break;
    echo "$i" . PHP_EOL;
}

?>