<?php

################################################
#                  Variáveis Estaticas         #
################################################

/**
 * Dentro do escopo de uma função podemos armazenar variaveis de 
 * forma estatica. Assim, elas mantem o valor que lhe foi atribuido
 * na ultima execução. é declarada com uma variavel estatica com o
 * operador static
 */


function percorre($quilometros)
{
    static $total;
    $total += $quilometros;
    echo "Percorreu mais $quilometros do total de $total";
}


percorre(100);
