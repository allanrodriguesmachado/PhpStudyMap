<?php
################################################
#                  Logicos                     #
################################################

/**
 * Operadores Lógicos são utilizados para combinar expressões lógicas
 * entre si, agrupando teste condicionais
 * 
 * 
 * ($a and $b) E: Verdadeiro True se tanto $a quanto $b forem verdadeiros
 * ($a or $b) OU: Verdadeiro True se $a ou $b forem verdadeiros
 * ($a xor $b) XOR: Verdadeiro True se $a ou $b forem verdadeiros, de forma exclusiva
 * 
 * 
 * (! $a) Not: Verdadeiro True se $a for False
 * ($a && $b) E: Verdadeiro True se $a quanto $b forem verdadeiros
 * ($a || $b) OU: Verdadeiro True se $a ou $b forem verdadeiros
 */


$tempoBom = true;
$naoPassear = false;

if ($tempoBom || $naoPassear) {
    echo "então vamos tomar sorvete";
} else {
    echo "Começou a chover";
}


echo '<br>';


$carro = true;
$dinheiro = false;


if ($dinheiro && $carro) {
    echo "Vamos viajar";
} else {
    echo "Não temos dinheiro";
}


echo '<br>';

$ferias = false;
$viajar = true;

if (!$ferias || $viajar) {
    echo "Vamos viajar";
} else {
    echo "Não vamos viajar";
}
