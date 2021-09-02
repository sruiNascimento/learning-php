<?php

/*
 * Condicional if
 * if ( condition) {
 *  statment
 * } else if (condition) {
 *  statment
 * } else {
 *  stament
 * }
 *
 */

$idade = 18;
if ($idade >= 18) {
    echo "$idade anos, portante é maior de idade" .PHP_EOL;
} else if ($idade >= 0) {
    echo "$idade anos, portanto é menor de idade" . PHP_EOL;
} else {
    echo "Idade inválidade" . PHP_EOL;
}

//Utilizando ou = ||
//Utilizando ou = or

$age = 20;
$name = "Rui";

if ($age == 20 or $name == "Rui"){
    echo "Atingiu a condição" . PHP_EOL;
} else {
    echo "Não atingiu a condição" . PHP_EOL;
}

//Utilizando and = &&
//Utilizando and = and

echo PHP_EOL;

if ($age == 20 && $name == "Rui"){
    echo "Atingiu a condição" . PHP_EOL;
} else {
    echo "Não atingiu a condição" . PHP_EOL;
}
?>