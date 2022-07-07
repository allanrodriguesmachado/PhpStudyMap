# Callback

#### en-US

#### pt-BR

`Callback -> call_user_func` Aceita parâmetros de uma função a ser executada. O parâmetro `callback` pode ser usado
como o nome da função representada por uma string ou método de um objeto, eles são representados por um array.

#

```php
<?php
    
    function user(string $firstName, string $lastName, int $age = null) 
    {
    	echo "Hello, I am $firstName $lastName, and I have $age years";
    }
    
    call_user_func('user', 'Allan', 'Rodrigues', 26);

?>
```

### Ir para [Null](10Null.md)🚀

#

@allanrodriguesmachado
