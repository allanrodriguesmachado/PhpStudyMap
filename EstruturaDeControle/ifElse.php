<?php

################################################
#                  if Else                     #
################################################

/**
 * O if é uma estrutura de controle que introduz um desvio condicional
 * ou seja, um desvio na execução natural do programa. Caso a condição
 * dada pela expressão seja satisfeita, então serão executadas as instruções
 * do bloco de comandos. Caso a condição não seja satisfatoria, o bloco de 
 * comandos será simplesmente ignorado. O comando IF pode ser lido como
 *  "SE (expressão) Então (comandos...)
 * Else é utlizado para indicar um novo bloco de comandos delimitado por {},
 * caso a confição IF não seja satisfeita. Pode ser lido como "Caso Contrario".                   
 */


$trabalhar = 10;

if ($trabalhar >= 7) {
    echo "Acordar para trabalhar";
} else {
    echo "Ainda não esta na hora";
}

echo '<br>';

$salario = 1000;
$tempoServico = 12;
$reclamacao = false;

if ($salario > 900) {
    if ($tempoServico >= 12) {
        if ($reclamacao != true) {
            echo "Funcionaio Promovido";
        }
    }
} else {
    echo "Funcionario não promovido";
}


echo '<br>';

$trabalhar = 7;

if ($trabalhar >= 10) {
    echo "Hora de Trabalhar";
} elseif ($trabalhar > 7 || $trabalhar <= 8) {
    echo "Vamos para academia";
} else {
    "Perdemos a hora";
}
