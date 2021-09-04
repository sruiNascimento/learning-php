<?php
$id_nomes = [
    "01" => "Rui",
    "cpf" => "12345678900",
    "sexo" => "M"
];

//Apresentando de forma concatenada o array associativo

echo "$id_nomes[01], $id_nomes[cpf], $id_nomes[sexo]" . PHP_EOL;

//Caso queria apresentar com as aspas para fazer a interpolação

echo "{$id_nomes['01']}, {$id_nomes['cpf']}, {$id_nomes['sexo']}" . PHP_EOL;
