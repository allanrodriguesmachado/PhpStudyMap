<?php

################################################
#                  Switch                      #
################################################

/**
 * O Comando Switch é uma estrutura de controle que simula uma bateria de teste
 * sobre uma variavel. É similar a uma série de comandos if sobre a mesma expressão
 * frequentemente, é necessario comparar a mesma variavel com valores diferentes
 * e executar uma ação especifica em cada um destes casos.
 * O switch executa linha por linha até encontrar a ocorrência de break. Por isso
 * é usado o comando break para evitar que os blocos de comando seguinte sejam
 * executados e o default sempre é executado quando nenhuma expressão for satisfeita
 */


$i = 'Rodrigues';
switch ($i) {
    case 'Allan':
        print "Allan";
        break;
    case "Rodrigues":
        print "Rodrigues";
        break;
    case 2:
        print "i é igual a 2";
        break;
    default:
        print "Dado invalido";
}
