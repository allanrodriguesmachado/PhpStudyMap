<?php

################################################
#                  Require                    #
################################################

/**
 * é idêntico ao include. difere somente a manipulação
 * de erro. Enquanto o incluide produz warning, o require
 * produz uma mensagem de fatal Error caso o arquivo não
 * exista
 */


function nomeDaRua($rua)
{
    return $rua;
}
