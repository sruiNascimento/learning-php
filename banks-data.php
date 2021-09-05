<?php
require "functions_bank.php";


$acc1 = [
    "titular" => "Rui",
    "saldo" => 12000.00
];
$acc2 = [
    "titular" => "Nara",
    "saldo" => 5000.00
];
$acc3 = [
    "titular" => "Vini",
    "saldo" => 9000.00
];
$acc4 = [
    "titular" => "Danilo",
    "saldo" => 2000.00
];
$acc5 = [
    "titular" => "Brendox",
    "saldo" => 4000.00
];
$acc6 = [
    "titular" => "Lois",
    "saldo" => 70000.00
];

$accounts = [$acc1, $acc2, $acc3, $acc4, $acc5, $acc6];

//imprimeConta($accounts);
//echo "Operação de deposito" . "<br>";
//deposita($accounts[0], 5000);
//imprimeConta($accounts);
//echo "Operacao de saque" . "<br>";
//saca($accounts[1], 500);
//imprimeConta($accounts);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas</title>
</head>
<body>
<h1>Rui's bank</h1>

<dl>
    <!--
        o comando abaixo iria usar " < ?php " echo para poder exibir um dado na tela
        porém foi substituído por " < ? =, portanto ficou claro que seria para ter uma exibição
    -->
    <?php foreach ($accounts as $conta){ ?>
        <dt><h4> <?=  "Titular: {$conta['titular']}"; ?></h4></dt>
        <dt><h4> <?= "Saldo R$ {$conta['saldo']}"; ?></h4></dt>
    <?php } ?>
</dl>

</body>
</html>
