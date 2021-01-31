<?php
################################################
#             Declaração                       #
################################################

/**
 * Uma string é uma cadeia de caracteres alfanuméricos. Para declarar
 * uma string podemos utilizar aspas simples ' ' ou duplas " ".
 * A diferença é que todo conteúdo contido dentro de aspas duplas é avaliado pelo
 * PHP. assim, se a string contém uma variavel, esta variavel será traduzida pelo 
 * seu valor
 */


$variavel = 'Aspas Simples';
$variavel = "Aspas Duplas";


/**
 * Tambem podemos declarar uma string literal com muitas linhas observando a sintaxe
 * a seguir, na qual escolhemos uma palavra-chave
 */

$texto = <<<ROCK
 Pink Floyd é 
 minha banda favorita
 ROCK;
echo $texto;
