<?php
//Array associativo
//Há índices estabelecidos, no caso abaixo temos o índice 'nome' e 'saldo'
$conta1 = ['nome' => 'Rui', 'saldo' => 1000.00];
$conta2 = ['nome' => 'Nara', 'saldo' => 2300.00];
$conta3 = ['nome' => 'Vinicius', 'saldo' => 1500.00];
//acessado com o índice nome

$contasCorrentes = [$conta1, $conta2, $conta3];
//echo "Nome: " . $conta1['nome'] . PHP_EOL;
//echo "Saldo: " . $conta1['saldo'] . PHP_EOL;

//fazendo iteraçãop no array $contasCorrentes e acessando os índices nome e saldo

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo "Titular: " . $contasCorrentes[$i]['nome'] . PHP_EOL;
    echo "Saldo: " . $contasCorrentes[$i]['saldo'] . PHP_EOL;
}

?>