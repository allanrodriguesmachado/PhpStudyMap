<?php

################################################
#             Comandos de saida                #
################################################




/**
 *  Os Comandos usados para dar (output) gerar uma sáida na tela.
 *  Podemos tambem executar no (prompt do sistema), mas sua saida
 *  será no proprio console. O programa pode ser executado via servidor
 *  de páginas WEB (APACHE ou IIS), a saida sera na pagina html
 */

/**
 * -> echo => é um  comando que imprime variaveis
 */

echo 'A', 'B';


/**
 * -> print => é uma função que imprime string
 */

print('Resultado');

/**
 * -> var_dump => é um comando muito usado para o debug, pois imprime o conteudo de forma explanativa
 */

$animal = array('Cachorro', 'Gato', 'Rato');
var_dump($animal);

/**
 * -> print_r => tem quase a mesma funcionalidade que o var_dump unica diferença que sai com um formato mais legível
 */
$dados = array('nome', 'sobrenome', 'contato');

print_r($dados);
