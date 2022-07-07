# Função                

#### pt-BR
`function` É o operador usado para criar uma função no PHP.


### Observação
>*  Nunca utilizar espaços em branco e sempre iniciar a função com uma letra
>*  Passar os argumentos da função sempre na mesma linha, separados por vírgula
>*  Sempre fazer o encapsulamento por chaves `{}`
>*  Utilizar o `return` para retornar o resultado da função
> 
#

```php
<?php
    
    function cadastroUsuario(string $nome, int $idade, string $email): string|bool
    {
        return $dados = $nome . $idade . $email;
    }

    echo cadastroUsuario('Allan ', 25, ' allan@php.com');
?>
```


### Ir para [Global](2Globais.md)🚀

#
@allanrodriguesmachado
