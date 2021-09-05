<?php
function imprimeConta(array $contas)
{
    echo "<ul>";
    foreach ($contas as $conta ) {
        echo "<li>Titular: {$conta['titular']}, saldo R$ {$conta['saldo']}</li>";
    }
    echo "</ul>";
}

function deposita(array &$conta, float $valor)
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
        echo "Deposito realizada com sucesso" . "<br>";
    } else {
        erroTransacao();
    }
}

function saca(array &$conta, float $valor)
{
    if ($conta['saldo'] >= $valor) {
        $conta['saldo'] -= $valor;
        echo "Saque realizado com sucesso" . "<br>";
    } else {
        erroTransacao();
    }
}

function erroTransacao()
{
    echo "Operação não realizada" . "<br>";
}


