<?php

/**
 * Variáveis são identificadores utilizados para representar valores mutaveis e voláteis,
 * que só existem durante na execução do código, elas ficam armazenadas na memoria
 * RAM e logo depois da execução do programa elas são destruidas, para criar uma variavel
 * no PHP precisa usar o $ que é usado como uma identificação
 *
 *  ----- >  Cuidados
 *         - Nunca iniciar a variavel com numero
 *         - Nunca utilizar espaços em branco no meio da variavel
 *         - Nunca utilizar carecteres especiais ( ! @ # ^ & * / || [ })
 *
 *
 */

    $firstName = "Allan";
    $lastName = "Rodrigues";

    echo "$firstName, $lastName";