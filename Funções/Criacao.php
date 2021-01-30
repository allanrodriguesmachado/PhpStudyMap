<?php

################################################
#             Criação de função                #
################################################

/**
 * Para declarar uma função em PHP, utiliza-se o operador 
 * function seguido do nome que deseja atribuir, sem espaços 
 * em branco e sempre começando com uma letra, Na mesma linha
 * digitamos a lista de argumentos(parâmetros)que a função irá 
 * receber, separados por vírgula. Em seguida, encapsulado por 
 * chaves {}, vem o código da função. No final, utiliza-se a 
 * cláusula return para retornar o resultado da função (integer,
 * string, array, objeto etc)
 */

function dadosCompleto($arg1, $arg2, $arg3)
{
    $nome = $arg1 . $arg2 . $arg3;
    return $nome;
}
echo dadosCompleto('Allan ', ' Rodrigues', ' Machado');

echo '<br>';

function calculoIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

echo calculoIMC(87, 1.85);
