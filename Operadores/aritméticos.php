<?php

################################################
#                  Aritmeticos                 #
################################################

/**
 * Operadores aritméticos são utilizados para realização de cálculos
 * matemáticos
 *  
 *   + Adição 
 *   - Subtração
 *   * Multiplicação
 *   / Divisão
 *   % Módulo (resto da divisão)
 */

/**
 * Em cálculos complexos, utilizar parêntes, sempre observandos as 
 * prioridades artiméticas
 */
$valorA = 2;
$valorB = 4;

echo $valorA + 3 * 4 + 5 * $valorB . PHP_EOL;
echo ($valorA + 3) * 4 + (5 * $valorB) . PHP_EOL;


/**
 * Conversão de tipos em operações
 */

// Declaração de uma string contendo 20 ou qualquer outro numero
$valorA = '20';
// Soma + 10 ou qualquer outro numero declarado
echo $valorA + 10;
