<?php

/**
 * Algumas funções como call_user_func() aceitam um parâmetro que 
 * significa uma função a ser executada. Este tipo de dados é chamado
 * de callback. Um parâmetro callback pode ser o nome de uma função 
 * representada por uma string ou método de um objeto a ser executado,
 * por um array
 */
function Dados($nome)
{
    echo "Meu nome é $nome";
}
call_user_func('Dados', "Allan");


echo '<br>';

function Texto($frase)
{
    echo "A musica Before I Forget é do $frase";
}

call_user_func("Texto", "Slipknot");
