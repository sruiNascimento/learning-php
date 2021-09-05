<?php
//Aprendendo a usar a função unset, que remove a variável da memória

$idade1 = 15;

echo $idade1 . PHP_EOL;
unset($idade1);

//echo $idade1;

$nome1 = "Rui";
$nome2 = "Nara";
$nome3 = "Vini";

$nomes = ["001" => $nome1, "002" => $nome2, "003" => $nome3];

foreach($nomes as $id => $nome) {
    echo ">> $id -> $nome " . PHP_EOL;
}
unset($nome1, $nome2, $nome3);
//utilizando a função unset para remover um elemento
unset($nomes['003']);
echo "Após a remoção do id = '003'" . PHP_EOL;
foreach($nomes as $id => $nome) {
    echo ">> $id -> $nome " . PHP_EOL;
}

//para subir um servidor de testes, basta executar o comando php - S localhost:3333 'ip:port'
