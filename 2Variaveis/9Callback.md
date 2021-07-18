# Callback               

#### en-US


#### pt-BR
`Callback -> call_user_func` Aceita parâmetros de uma função a ser executada. O parâmetro `callback` pode ser usado
como o nome da função representada por uma string ou método de um objeto, eles são representados por um array.

#

```php
<?php
    
    function pessoa($dados)
    {
        echo "Meu nome é $dados, #BoraProgramar";
    }
    
    call_user_func('pessoa', "Allan");

?>
```


### Ir para [Null](10Null.md)🚀

#
@allanrodriguesmachado