# Misto                

#### en-US


#### pt-BR
`Misto -> mixed` Representa múltiplos tipos de dados com o mesmo parâmetro, mas não todos os tipos de dados. Quando passamos um parâmetro do tipo `mixed`, significa que a função aceita diversos tipos de dados
com parâmetro.

### Retorno da função
> * Booleano
> * Inteiro
> * Double
> * String
> * String
> * Object
> * Recurso
> * Null

#

```php
<?php

    $dados = array(1, 1.123 , NULL, new stdClass, 'Hello World');
    
    foreach ($dados as $value) {
        echo gettype($value) . PHP_EOL;
    }

?>
```


### Ir para [Callback](9Callback.md)🚀

#
@allanrodriguesmachado