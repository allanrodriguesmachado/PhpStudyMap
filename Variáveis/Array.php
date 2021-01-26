<?php

/**
 * Array é uma lista de valores armazenados na memoria, os quais podem
 * ser de tipos diferentes(Númericos, String, Objetos) e podem ser 
 * acessados a qualquer momento, pois cada valor é relacionado a uma chave.
 * Um array também pode crescer dinamicamente com a adição de novos itens.
 */

$dados = array('Allan', '23', 'Dev', 'SP');

echo $dados[1];
echo '<br>';
print_r($dados);
