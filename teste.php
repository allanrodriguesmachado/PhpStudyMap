
<?php

function cadastroUsuario($nome, $idade, $email){
    $dados = $nome . $idade . $email;
    return $dados;
}

echo cadastroUsuario('Allan ', 25, ' allan@php.com');