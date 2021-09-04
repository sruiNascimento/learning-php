<?php
$conta1 = ['nome' => 'Rui', 'saldo' => 1000.00];
$conta2 = ['nome' => 'Nara', 'saldo' => 2300.00];
$conta3 = ['nome' => 'Vinicius', 'saldo' => 1500.00];
$contasCorrentes = ['123.456.789.01' => $conta1, '123.444.789.01' => $conta2, '123.555.789.01' => $conta3];

echo "Saldo: " . $contasCorrentes['123.456.789.01']['saldo'] . PHP_EOL;
//depositando dinheiro diretamente do Rui
$contasCorrentes['123.456.789.01']['saldo'] += 500;
echo "Saldo: " . $contasCorrentes['123.456.789.01']['saldo'] . PHP_EOL;

function sacar($valor, $conta) {
    if ($conta['saldo'] >= $valor && $valor > 0) {
        $conta['saldo'] -= $valor;
        echo "Saldo realizado com sucesso" . PHP_EOL;
        echo "Saldo atual R$" . $conta['saldo'] . PHP_EOL;
    } else {
        echo "Transação não concluída." . PHP_EOL;
    }
}

sacar( 110, $conta1);

echo $conta1['saldo'] . PHP_EOL;