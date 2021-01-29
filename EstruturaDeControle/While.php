<?php

################################################
#                  While                       #
################################################

/**
 * O WHILE é uma estrutura de controle similar ao if. Da mesma forma, possui
 * uma condição para executar um bloco de comandos. A diferença premordial é que o WHILE 
 * estabele um laço de repetição, ou seja, o bloco de comandos será executado repetivamente
 * enquando a condição de entrada dada pela expressão for verdadeira. Este comando
 * pode ser interpretado como "ENQUANTO(expressão) FAÇA(comandos...)"
 */

$valorA = 9;

while ($valorA < 15) {
    print $valorA;
    $valorA++;
}


echo $valorA;
