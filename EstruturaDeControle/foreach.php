<?php
################################################
#                  Foreach                     #
################################################

/**
 * O foreach é um laçõ de repetição para iteração em arrays ou matrizes
 * É um for simplificado que decompõe um vetor ou matriz em cada um de 
 * seus elementos por meio de sua cláusula
 */


$nome = array("Allan ", " Rodrigues", " Machado");
foreach ($nome as $dados) {
    echo $dados;
}
