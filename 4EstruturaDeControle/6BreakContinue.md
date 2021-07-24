# Break - Continue                

#### en-US


#### pt-BR
`Break Continue` O `Continue` quando é executado ele ignora todas as instruções até o fechamento do "}", o programa 
continua a seguir para aproxima verificação da condição do laço de repetição, já o `Break` aborta toda a execução do 
bloco de comandos, sendo assim depois do `Break` nada será executado.

#

```php
<?php

    for($a = 1; $a <= 10; $a++){
    if($a % 2 === 0){
        continue;
    }

    if($a > 7){
        break;
    }

    echo "Pulou + 2 :: {$a}";
    }

?>
```


### Ir para [Requisição de arquivos](/5RequisicaoDeArquivos/1Include.md)🚀

#
@allanrodriguesmachado