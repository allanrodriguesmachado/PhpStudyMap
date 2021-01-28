<?php

################################################
#                  Objeto                      #
################################################

/**
 * Um objeto é uma entidade com um determinado comportamento definido
 * por seus métodos(ações) e propriedades(dados). Para criar um objeto deve-se
 * utilizar o operador new.
 */

class Desenvolvedor
{
    public $dev;
    function Job()
    {
        echo "Desenvolvedor {$this->cpu}";
    }
}


$pc = new Desenvolvedor;
$pc->cpu = "Full Stack - PHP";
$pc->Job();
