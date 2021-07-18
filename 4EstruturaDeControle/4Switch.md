# Switch               

#### en-US


#### pt-BR
`Switch` É uma estrutura que simula uma bateria de teste sobre uma variável, faz a avaliação
apenas de condições de igualdade, faz a verificação se o valor recebido é igual a algumas das opções
especificadas no seu corpo.

#

```php
<?php

    $payment = "approved";
    switch ($payment){
        case "billet_printed":
            var_dump("Boleto impresso");
            break;
        case 'Canceled':
            var_dump("Cancelado");
            break;
        case 'Past_due':
        case 'Pending':
            var_dump("Aguardando Pagamento");
            break;
        case 'approved':
        case 'completed':
            var_dump("Aprovado");
            break;
        default;
            var_dump("Erro eo processar pagamento");
            break;
    }

?>
```


### Ir para [Foreach](5Foreach.md)🚀

#
@allanrodriguesmachado