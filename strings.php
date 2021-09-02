<?php
$name = "Rui";
$age = 24;

/*
 * Concatenação de strings pode ser feita pelo . ou ,
 * Caso usar aspas duplas, basta usar o $com a variável
 * Quebra de linha há 2 formas
 * \n ou PHP_EOL
 */

echo 'My name is ' . $name . ' I\'m ' . $age . "\n";
echo "My name is $name I'm $age" . PHP_EOL;
?>