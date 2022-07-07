# Comandos de saída            

---

#### pt-br
São usados para gerar uma saída em tela (OUTPUT).

* Linhas de comando executadas no `prompt do sistema` sua saída será no proprio console.
* Linhas de comando executadas no `servidor web -  Apache, NGINX ou IIS` sua saída será no propria pagina HTML.

#### en-us
They are used to generate an output on the screen (OUTPUT).

* Command lines executed in the `system prompt` will be output in the console itself.
* Command lines executed on the `web server - Apache, NGINX or IIS` will be output in the HTML page itself.

---


##### pt-br
 `echo` É um comando usado para imprimir uma ou mais string na tela.  
```php
<?php
    echo 'Hello World';
?>
```
`Output` Hello World

#### en-US
`echo` Is a command used to print one or more strings to the screen.
```php
<?php
    echo 'Hello World';
?>
```
`Output` Hello World

---

##### pt-br
`var_dump` Explana todo conteúdo de uma variável, mostrando toda estrutura sobre uma ou mais
Expressão, incluindo o tipo e o valor

```php
<?php
$user = [
    "fisrt_name" => "Allan",
    "last_name" => "Rodrigues"
];

var_dump($user);
?>
```
`Output`

    array(2) {
        ["first_name"]=>
        string(5) "Allan"
        ["last_name"]=>
        string(9) "Rodrigues"
    }

##### en-US
`var_dump` Explains the entire contents of a variable, showing the entire structure over one or more
Expression, including type and value

```php
<?php
$user = [
    "fisrt_name" => "Allan",
    "last_name" => "Rodrigues"
];

var_dump($user);
?>
```
`Output`

    array(2) {
        ["first_name"]=>
        string(5) "Allan"
        ["last_name"]=>
        string(9) "Rodrigues"
    }

---

##### pt-br
`print_r` Explana todo conteúdo de uma variável igual ao `var_dump`, mas em um formato mais legivel e suprimindo os dados.
  
```php
<?php
$user = [
        "fisrt_name" => "Allan",
        "last_name" => "Rodrigues"
    ];
   
 print_r($user);
?>
```
    Array
    (
        [fisrt_name] => Allan
        [last_name] => Rodrigues
    )


##### en-US
`print_r` explain all contents of a variable like `var_dump`, but in a more readable format and suppressing the data.

```php
<?php
$user = [
        "fisrt_name" => "Allan",
        "last_name" => "Rodrigues"
    ];
   
 print_r($user);
?>
```
    Array
    (
        [fisrt_name] => Allan
        [last_name] => Rodrigues
    )



### Ir Para [Variaveis](/2Variaveis/1Variaveis.md) 🚀

#

@allanrodriguesmachado
