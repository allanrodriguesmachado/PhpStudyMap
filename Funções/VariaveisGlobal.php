<?php

################################################
#                  Variaveis Globais           #
################################################


/**
 * Todas as variaveis declaradas dentro do espoco de uma função
 * são locais. Para acessar uma variavel ao constexto de uma 
 * função sem passa-la como parametro, é necessario declara-la
 * como global. Uma variavel global é acessar a partir de qualquer
 * ponto da aplicação.
 */


$total = 2;
function km($quilometros)
{
    global $total;
    $total += $quilometros;
    return $quilometros *= 0.6;
}

echo 'percorreu no total ' . $total . ' quilometros';
