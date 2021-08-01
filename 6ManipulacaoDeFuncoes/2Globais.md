# Função global            

#### pt-BR
`global` Tem acesso a uma variável externa da funçao, a variavel `global` pode ser acessada a qualquer ponto
da aplicação.

###Cuidado

* Toda variável declarada, esta no escopo da função e são locais, com exceção da `global`

#

```php
<?php
    
    function calcImc(): float
    {
        global $peso
        global $altura;
        return $peso / ($altura * $altura);
    }

    $peso = 20;
    $altura = 1.89;
    echo (calcImc());

?>
```


### Ir para [Estáticas](3Estaticas.md)🚀

#
@allanrodriguesmachado