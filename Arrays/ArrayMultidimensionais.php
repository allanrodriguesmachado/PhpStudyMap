<?php

################################################
#             Array Multidimensionais          #
################################################

/**
 * Arrays Multidimensionais ou matrizes são arrays nos quais algumas 
 * de suas posições podem conter outros arrays de forma recursiva. Um
 * array multidimensional pode ser criado pela função array()
 */

$dados = array(
    'Pc Gamer' => array(
        'Placa Mãe' => ' asus',
        'Memoria ram' => '16GB',
        'HeadSet' => 'Sony'
    ),

    'Notebook Gamer' => array(
        'Placa Mãe' => 'GigaByte',
        'Memoria Ram' => '8GB',
        'MousePad' => 'Lenovo'

    )
);

echo $dados['Pc Gamer']['Placa Mãe'];

var_dump($dados);


/**
 * Outra forma de criar um array multidimensional é atribuindo valores
 */

$dados['Pc Gamer']['Placa Mãe'] = 'Asus';
$dados['Pc Gamer']['Memoria Ram'] = '16GB';
$dados['Pc Gamer']['HeadSet'] = 'Sony';


$dados['Notebook Gamer']['Placa Mãe'] = 'GigaByte';
$dados['Notebook Gamer']['Memoria Ram'] = '8GB';
$dados['Notebook Gamer']['MousePad'] = 'Lenovo';


echo $dados['Notebook Gamer']['MousePad'];
var_dump($dados);


/**
 * Para Realizar iterações em um array Multidimensional é preciso
 * observar quantos níveis ele possui. 
 */

foreach ($dados as $valeu => $modelo) {
    echo "=> value $valeu";
    foreach ($modelo as $modelo => $valor) {
        echo "modelo $modelo => $valor";
    }
}
