<?php

################################################
#          Passagem de parâmetros              #
################################################

/**
 * Existem dois tipos de passagem de parâmetros (by value) e por
 * referencia (by reference). Por padrão, os valores são passados
 *  by value para as funções. Assim, o parâmetro que a função
 * recebe é tratado como variavel local dentro do contexto da 
 * função não alterando o seu valor externo
 */

/**
 * Para efetuar a passagem de parâmetros by reference para as funções
 * basta utilizar o operador & na frente do parâmetro, fazendo com que
 * as transformações realizads pela função sobre a variavel sejam validas
 * no contexto externo á função
 */

/**
 * O PHP Permite definir valores default para parâmetros
 * Reescrevendo a função anterior, declarando o default 
 * de $valor como sendo 40. Assim, se o programador 
 * executar a função sem especificar o parâmetro, sera
 * assumido um valor
 */



function incremental(&$variavel, $valor)
{
    $variavel += $valor;
}

$a = 1000;
incremental($a, 20);

echo $a;
