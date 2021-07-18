# Lógicos                

#### en-US


#### pt-BR
`Lógicos` É utilizado para combinar expressões lógicas, e agrupar teste condicionais.

> * `AND` E, as duas expressões precisam ser verdadeiras.
> 
> * `OR` OU, se uma expressão ou a outra for verdadeira.  
> 
> * `XOR`, XOR
> 
> ####
> 
> * `!`, NOT
> 
> * `&&`, E
> 
> * `||`, OU

#

```php
<?php

    $tempoBom = true;
    $dinheiro = true;
    
    if($tempoBom && $dinheiro){
        echo "O Tempo esta bom e tenho dinheiro, vamos sair";
    } else{
        echo "O tempo não esta bom e não tenho dinheiro, não vamos sair";
    }


    
    $tempoBom = false;
    $tempoRuim = true;
    
    if($tempoBom || $tempoRuim){
        echo "Vamos pensar em sair";
    }else{
        echo "Não vamos sair";
    }
    
    
    $tempoBom = false;
    $tempoRuim = false;
    
    if(!$tempoBom || $tempoRuim){
        echo "Vamos sair";
    }else{
        echo "Não vamos sair";
    }

?>
```


### Ir para [Estrutura de Controle](/4EstruturaDeControle/IfElse.md)🚀

#
@allanrodriguesmachado