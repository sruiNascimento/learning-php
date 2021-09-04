<?php
$conta = [
    'nome' => "Rui",
    'saldo' => 12000.00
];

//Desse modo sem o return modoficará apenas o valor que seria  cópia
//echo "Antes da 'modificacção' {$conta['nome']}" . PHP_EOL;
//function porValor(array $acc){
//    $acc['nome'] = strtoupper($acc['nome']);
//
//}
//porValor($conta);
//echo "Depois da 'modificação' {$conta['nome']}" . PHP_EOL;

//Com a referência, não precisará do return e modificará
echo "Antes da 'modificacção' {$conta['nome']}" . PHP_EOL;
function porValor(array &$acc){
    $acc['nome'] = strtoupper($acc['nome']);

}
porValor($conta);
echo "Depois da 'modificação' {$conta['nome']}" . PHP_EOL;
