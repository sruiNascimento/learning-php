<?php

//Fazendo iteração nos arrays

$idadesList = [12, 24, 25, 21, 26];
$filmesMarvel = array('Avengers: Endgame', 'Captain Marvel', 'Homem-formiga e a Vespa');

//Iteração com o for
//for ($i = 0; $i < 5; $i++) {
//    echo "index[$i] = $idadesList[$i]" . PHP_EOL;
//}
//
//for ($i = 0; $i < 3; $i++) {
//    echo "index[$i] = $filmesMarvel[$i]" . PHP_EOL;
//}

//count() serve para contar a quantidade de itens

for ($i = 0; $i < count($idadesList); $i++) {
    echo "index[$i] = $idadesList[$i]" . PHP_EOL;
}

for ($i = 0; $i < count($filmesMarvel); $i++) {
    echo "index[$i] = $filmesMarvel[$i]" . PHP_EOL;
}