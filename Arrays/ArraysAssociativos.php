<?php

################################################
#            Arrays Associativos               #
################################################

/**
 * Os arrays no PHP são associativos pois contêm uma chave de acesso
 * para cada posição, para criar um array, pode-se utilizar a função
 * array([chave=>] valor)
 */

$dados = array('nome' => "Allan", 'sobrenome' => "Rodrigues");

/**
 * Outra forma de criar um array associativo é simplemente adicionando-lhe 
 * valores
 */

$dados['nome'] = 'Allan';
$dados['rua'] = 'Qualquer';
$dados['bairro'] = 'Outro Qualquer';
$dados['cidade'] = 'São Paulo';
$dados['CEP'] = 9838237438;


echo $dados['nome'];
echo $dados['rua'];
echo $dados['bairro'];
echo $dados['cidade'];
echo $dados['CEP'];
