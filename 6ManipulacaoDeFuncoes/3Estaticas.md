# Função Estática

#### pt-BR
`static` A função estática armazena valores de forma estática, mantendo o valor que foi atribuído na última execução.

#


```php
<?php
    
   function payTotal($preco): string
    {
        static $total;
        $total += $preco;
        return "<p>O total a pagar é R$" . number_format($total, "2", ",", ".") . "</p>";
    }
    
    $pagamento = payTotal(200);
    $pagamento = payTotal(3300);
    $pagamento = payTotal(200);
    $pagamento = payTotal(50);
    echo $pagamento;
    
?>
```


### Ir para [Parâmetros](4Parametro.md)🚀

#
@allanrodriguesmachado