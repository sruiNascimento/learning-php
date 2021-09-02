<?php
/*
 * Desafios
 * 1º Desafio números ímpares
 * 2º Desafio tabuada
 * 3º Calculo do IMC
 */
//Apresentando os números ímpares
for ($i = 0; $i < 101; $i++){
    if ($i % 2 == 1) echo ">> $i é ímpar" . PHP_EOL;
}

//Apresentado a tabuada de um número
$numero = 10;

for ($i = 1; $i < 11; $i++) {
    //$multiplicacao = $numero * $i;
    echo "$numero X $i = " . $numero * $i . PHP_EOL;
}

//Calculando o IMC

$altura = 1.71;
$massa = 71;
$imc = $massa / $altura ** 2;
if ($imc > 0) {
    if ($imc < 16) {
        echo ">> IMC = $imc - Magreza grave" . PHP_EOL;
    } else if ($imc < 17) {
        echo ">> IMC = $imc - Magreza moderada" . PHP_EOL;
    } else if ($imc < 18.5) {
        echo ">> IMC = $imc - Magreza leve" . PHP_EOL;
    } else if ($imc < 25) {
        echo ">> IMC = $imc - Saudável" . PHP_EOL;
    } else if ($imc < 30) {
        echo ">> IMC = $imc - Sobrepeso" . PHP_EOL;
    } else if ($imc < 35) {
        echo ">> IMC = $imc - Obesidade Grau  I" . PHP_EOL;
    } else if ($imc < 40) {
        echo ">> IMC = $imc - Obesidade Grau  II (severa)" . PHP_EOL;
    } else if ($imc >= 40) {
        echo ">> IMC = $imc - Obesidade Grau  III (mórbida)" . PHP_EOL;
    }
}else {
    echo "Opcão inválida" . PHP_EOL;
}

?>
