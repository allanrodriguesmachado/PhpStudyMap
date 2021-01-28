<?php

################################################
#                  Relacionais                 #
################################################


/**
 * Operadores Relacionais são utilizados para realizar comparaçoes entre 
 * valores ou expressões, resultado sempre um valor boolean(TRUE ou FALSE)
 *  
 *  ==  igual. Resulta verdadeiro (TRUE) se expressões forem iguais 
 *  === Idêntico. Resulta verdadeiro (TRUE) se as expressões forem iguais e do mesmo tipo
 *  != ou <> Diferente. Resulta verdadeiro se as variaveis forem diferentes
 *  < Menor
 *  > Maior
 *  <= Menor ou igual
 *  >= Maior ou igual
 */


$valorA = 10;

if ($valorA = 10) {
    echo true;
} else {
    echo false;
}

echo '<br>';



$valor = 1234;
$valorB = '1234';

if ($valor == $valorB) {
    echo '$valor e $valorB são iguais';
} else if ($valor != $valorB) {
    echo '$valor e $valorB são diferentes';
}


echo '<br>';


$valor = 1234;
$valorB = '1234';

if ($valor === $valorB) {
    echo '$valor e $valorB são iguais';
} else if ($valor !== $valorB) {
    echo '$valor e $valorB são diferentes';
}


/**
 * O PHP considera o valor zero como sendo falso em comprações lógicas. para
 * evitar error semânticos em retorno de valores calculados por funções 
 */

echo '<br>';

$valorE = 0;
if ($valorE == false) {
    echo "$valorE é do tipo false";
}


$valorE = 0;
if ($valorE === false) {
    echo "$valorE é zero é mesmo";
}
