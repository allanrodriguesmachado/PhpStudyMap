# Variáveis               

#### en-US


#### pt-BR
`Variáveis` São identificadores utilizados para representar valores mutáveis e voláteis, tem a funcionalidade de guardar dados.
O seu valor pode ser modificado ao longo do código ou até mesmo apresentado.

Para declarar uma variável usamos o dollar($) e logo em seguida o identificador (nome da variável).

#

```php
<?php
    
    $firstName = "Allan";
    $lastName = "Rodrigues";
    echo $firstName, $lastName;
?>
```
#

### `Algumas Dicas`

> * Nunca iniciar a nomenclatura de variáveis com números.
> * Nunca utilizar espaços em branco no meio do identificador da variável.
> * Nunca utilizar caracteres especiais (! @ # % ^ & * / | [] {}).
> * Nunca criar variáveis com mais de 15 caracteres para manter sempre a clareza do código.
> * Sempre criar variáveis com nomes significativos para ter um contexto claro na qual a variável está inserida. 


#

O PHP é case sensitive, isso significa que o seu conteúdo é sensível a letras, maiúsculas e minúsculas. Devemos sempre 
ter cuidado ao declarar nossas variáveis, pois a variável `$firstName` é tratada de uma forma totalmente diferente da 
variável `$FirstName` o PHP entende serem variáveis com valores totalmente diferentes.

### Ir para [Booleano](2Booleano.md)🚀

#

@allanrodriguesmachado
