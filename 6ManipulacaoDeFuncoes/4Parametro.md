# Função por parâmetros                

#### pt-BR
`&` A função recebera parâmetros baseados na referência, irá realizar as suas operações baseado na referência original do 
parâmetro. O valor da variável será alterado no escopo global.

#

```php
<?php

    function soma(&$valor1, $valor2){
    $valor1 += $valor2;
    }
    
    $valor3 = 20;
    soma($valor3, 30);
    echo $valor3;

?>
```


### Ir para [Recursão](5Recursao.md)🚀

#
@allanrodriguesmachado