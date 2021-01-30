<?php
################################################
#                Recursão                      #
################################################

/**
 * O PHP permite chamada de funçõoes recursivamente.
 */


function Fatorial($numero)
{
    if ($numero == 1)
        return $numero;
    else
        return $numero * Fatorial($numero - 1);
}

echo Fatorial(5);
