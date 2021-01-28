<?php

################################################
#                  String                      #
################################################

/**
 * Uma string é uma cadeia de caracteres alfanuméricos. Para declara-la
 * podemos utilizar aspas simples '' ou aspas duplas ""
 */

$firstName = 'Allan';
$job = "Dev. BackEnd";

echo "Meu nome é " . $firstName . " e trabalho como " . $job . '<br>';
echo "Meu nome é {$firstName} e trabalho como {$job}";
