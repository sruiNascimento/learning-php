<?php
//Array associativo
//Há índices estabelecidos, no caso abaixo temos o índice 'nome' e 'saldo'
$conta1 = ['nome' => 'Rui', 'saldo' => 1000.00];
$conta2 = ['nome' => 'Nara', 'saldo' => 2300.00];
$conta3 = ['nome' => 'Vinicius', 'saldo' => 1500.00];
$contasCorrentes = [0 => $conta1, 1 => $conta2, 2 => $conta3];

//Aprendendo sobre o foreach

foreach ($contasCorrentes as $conta) {
    echo $conta['nome'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;
}

//pegando por chave e valor

foreach ($contasCorrentes as $index => $value ) {
    echo $index . PHP_EOL;
    echo $value['nome'] . PHP_EOL;
    echo $value['saldo'] . PHP_EOL;
}

?>