<?php
################################################
#                  Array                       #
################################################

/**
 * Arrays são acessados mediante uma posição, como um índice numérico. 
 * Para Criar um array, pode-se utilizar a função array([chave=>] valor)
 */

$dados = array('Nome', 'Sobrenome');

$dados = array(0 => 'Nome', 1 => 'Sobrenome');

/**
 * Outra forma de criar um array é simplesmente adicionando-lhe valores
 */

$nome[] = 'Allan';
$nome[] = ' Rodrigues';

echo $nome[0];
echo $nome[1];
