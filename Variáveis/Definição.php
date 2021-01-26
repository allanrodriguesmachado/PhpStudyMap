<?php

/**
 * Variáveis são identificadores utilizados para representar valores mutaveis e voláteis,
 * que só existem durante na execução do código, elas ficam armazenadas na memoria
 * RAM e logo depois da execução do programa elas são destruidas, para criar uma variavel
 * no PHP precisa usar o $ que é usado como uma identificação.
 * 
 * O PHP é case sensitive, ou seja, é sensível a letras maiusculas e minúsculas. Devemos
 * Tomar cuidado ao declarar variavel e nomes de funçoes $codigo e totalmente diferente de
 * $Codigo 
 * 
 *
 *  ----- >  Cuidados
 *         - Nunca iniciar a variavel com numero
 *         - Nunca utilizar espaços em branco no meio da variavel
 *         - Nunca utilizar carecteres especiais ( ! @ # ^ & * / || [ })
 */

$firstName = "Allan";
$lastName = "Rodrigues";

echo "$firstName, $lastName";


/**
 * Quando uma variavel é atribuída a outra, sempre é criada uma nova area de 
 * armazenamento na mamoria, apesar de $b receber o mesmo conteudo de
 * $a, após a modificação em $b, $a continua com o mesmo valor
 */

$a = 10;
$b = $a;
$b = 20;

echo $a; // Resultado 10
echo $b; // Resultado 20


/**
 * Para criar referencia entre variaveis, duas variveis apontada para a mesma região da memória
 * a atribuição deve ser precedida pelo operador &. Assim qualquer alteração em qualquer uma das 
 * variaveis refete na outra
 */

$a = 15;
$b = &$a;
$b = 20;

echo $a; // Resultado 20
echo $b; // Resultado 20
