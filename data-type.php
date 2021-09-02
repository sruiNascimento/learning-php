<?php
/*
 * Tipos de variáveis
 * integer
 * double
 * boolean
 */

    $idade = 24;
    //getType - função para retornar o tipo de dado que está sendo usado pela variável
    echo gettype($idade), "\n";

    $salario = 2500.00;

    echo gettype($salario), "\n";
    $divisao = 10 / 3;
    echo gettype($divisao), "\n";

    $text = "Olá mundo";
    echo gettype($text), "\n";

    $verdadeiro = true;
    $falso = false;
    echo gettype($verdadeiro), " ",gettype($falso), "\n";
?>