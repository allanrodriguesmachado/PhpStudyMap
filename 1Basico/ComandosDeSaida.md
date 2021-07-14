#                

#### en-US


#### pt-BR
Os comandos de saída são usados para gerar uma saída na tela, isso é chamado de output

##

`echo` Retornar uma ou mais string, 
* echo não é uma função(construtora da linguagem), então não é obrigatório o uso de parênteses.
```php
<?php
    
    echo 'Hello World';
?>
```

###

`print` É uma função que imprime uma string no console.
* print é uma função(construtura da linguagem), então precisando sempre que usar o print usar os parênteses
```php
<?php
    
    echo ('Hello World');
?>
```

###

`var_dump` É uma função usada para fazer debug no código.
* mostra informação sobre a variável, ela retorna toda estrutura sobre uma ou mais expressões, incluindo o tipo e o valor.

```php
<?php
    
   $dados = array('firstName', 'lastName');
   
   var_dump($dados);
?>
```

###

`print_r` É uma função usada para fazer debug no código igual o var_dump
* Sua diferença que o retorno de uma variável vem de forma legível, e precisamos tomar cuidado pois o print_r move o ponteiro 
do array para o fim, nesse caso devemos sempre usar o `reset()`.
  
```php
<?php
    
   $dados = array('firstName', 'lastName');
   
   print_r($dados);
?>
```
```

#
@allanrodriguesmachado