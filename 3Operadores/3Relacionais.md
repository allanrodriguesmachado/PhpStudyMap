# Relacionais               

#### en-US


#### pt-BR
`Relacionais` É usado para realizar comparações entre valores ou expressoes,
sempre seu retorno será um valor boolean `TRUE` ou `FALSE`

> * `==` Igual, expressões iguais.
> 
> * `===` Idêntico, expressões iguais e do mesmo tipo.
> 
> * `!= ou <>` Diferente, variaveies diferentes.
> 
> * `<` Menor
> 
> * `<=` Menor ou igual 
> 
> * `>` Maior
> 
> * `>=` Maior ou igual

### Observação
> O PHP considera o valor zero sendo falso na comparação.

#

```php
<?php
 
$a = 1234;
$b = '1234';

    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a != $b);
    var_dump($a > $b);
    var_dump($a >= $b);
    var_dump($a < $b);
    var_dump($a <= $b);

?>
```


### Ir para [Lógicos](4Logicos.md)🚀

#
@allanrodriguesmachado