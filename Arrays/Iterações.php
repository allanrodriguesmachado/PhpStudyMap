<?php

################################################
#                  Iterações                   #
################################################

/**
 * Os arrays podem ser iterados no PHP pelo operador FOREACH, 
 * percorrendo cada uma das posições do array
 */

$dados['nome'] = 'Allan' . '<br>';
$dados[' sobrenome'] = ' Rodrigues';

foreach ($dados as $value => $dados) {
    echo ("$value => $dados");
}
