#                

#### en-US


#### pt-BR
`Constante` É um valor constante isso significa que ele não pode ser modificado ao longo do código, como as variáveis que
pode ser alterada a qualquer momento.


### `Algumas Dicas`
> * Definir constante sempre com letra maiúscula.
> * O termo const não deve ser aplicado a variáveis locais ou a parâmetros.
> * Desde o PHP 5.3, o termo `const` pode ser usado para criar constantes globais.
> * O `define` permite definir constantes globais e locais, mas não permite ser usada dentro do contexto de uma classe.


### `Diferença entre define e const`

> * É que usando `define` podemos atribuir o nome para a constante no momento em que o código está sendo executado, já 
> com a `const` isso não é possivel.
>   * `define` Declara a constante em tempo de execução.
>   * `const` Declara a constante em tempo de complicação.

#

```php
<?php

    define("MEU_NOME", 'Allan');
    const MEU_SOBRENOME = 'Rodrigues';
    
?>
```


### Ir para []()🚀

#
@allanrodriguesmachado