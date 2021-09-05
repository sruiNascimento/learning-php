<?php
$idades = [10, 14, 88, 34, 56, 78];
//Pegando os valores do array
list($idade1, $idade2, $idade3) = $idades;

echo "$idade1 $idade2 $idade3" . PHP_EOL;

$conta1 = [
  'titular' => "Rui",
  'saldo' => 12000.00
];

$conta2 = [
    'titular' => "Nara",
    'saldo' => 5000.00
];

$conta3 = [
    'titular' => "Kaio",
    'saldo' => 3000.00
];

$contas = [$conta1, $conta3, $conta3];
//Aprendendo a usar os dados de um array associativo, portanto é necessário passar o índice criado
foreach ($contas as $conta){
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo "Titular = $titular\nSaldo R$ = $saldo" . PHP_EOL;
}