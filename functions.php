<?php
//Aprendendo a criar com função, parâmetros e retornos

// A função abaixo irá somar dois valores sem retornos
function soma (int $numero1, int $numero2)
{
  echo "$numero1 + $numero2 = " . ($numero1 + $numero2) . PHP_EOL;
}

soma (10, 12);

//somando mas sem modificar a variável
$valor = 5;
function multiplicaPor10($valor)
{
    $valor *= 10;
    echo $valor . PHP_EOL;
}
multiplicaPor10($valor);
//apresentando o valor da variável
echo $valor . PHP_EOL;

//Alterando o valor da variável com o return

echo "$valor antes de ser alterado" . PHP_EOL;

function subtrai1($valor)
{
  return $valor -= 1;

}
$valor = subtrai1($valor);
echo "$valor final" . PHP_EOL;