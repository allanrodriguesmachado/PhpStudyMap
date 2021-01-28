<?php

################################################
#                  Constante                   #
################################################

/**
 * Uma é um valor que não pode ser alterado durante a execução do 
 * programa, ela é representada por um identificador, assim como as
 * variaveis, pode conter valores escalares (boolean, inteiro, 
 * ponto flutuante e string). e pode ser composto de outros valores, 
 * como vetores ou objetos
 */

define("NOME_COMPLETO", "Allan");
define("IDADE", 25);


echo NOME_COMPLETO;
echo IDADE;

echo '<br>';

echo "Meu nome é " . NOME_COMPLETO . " e tenho " . IDADE . " anos";
