<?php

################################################
#                  Booleano                    #
################################################


/**
 * Um booleano expressa um valor lógico que pode ser verdadeiro ou falso. 
 * Para especificar um valor booleano, utilize as palavras-chave TRUE ou FALSE
 * 
 * Tambem são considerados valores falsos em comparações boolenas
 * 
 *  Inteiro 0
 *  Ponto flutuante 0.0
 *  Uma string vazia "" ou "0"
 *  Um array vazio
 *  Um objeto sem elemento
 *  Tipo Null
 */

$nomeCompleto = false;

if ($nomeCompleto) {
    echo "Allan Rodrigues TRUE";
} else {
    echo "Nome FALSE";
}

echo '<br>';

$unidade = 90;

if ($unidade > 91) {
    echo "TRUE";
} else {
    echo "FALSE";
}
