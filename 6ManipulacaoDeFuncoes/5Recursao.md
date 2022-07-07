# Função recursiva

#### pt-BR

`Recursiva` Tem a função de chamar uma determinada função a ela mesma, isso ocorre até que a condição seja satisfeita.

#

```php
<?php
    function fatorial($numero){
        if($numero <= 1){
            return $numero;
        }
        
         return $numero * fatorial($numero - 1);
    }
    
    echo fatorial(4);
?>
```

### Ir para []()🚀

#

@allanrodriguesmachado
