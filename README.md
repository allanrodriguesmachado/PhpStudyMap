[allanrodriguesmachado - Overview](https://github.com/allanrodriguesmachado)

[JavaScript is not available.](https://twitter.com/AllanRo23999295)

> 🧠 Base de estudo sobre PHP, tudo que linguagem pode oferecer, todo estudo voltado a orientação a objetos

# PHP

## Um Programa em PHP

- [ ]  Extensão de arquivos

> Formas de nomear programas em PHP

- .PHP → Arquivo PHP contendo um programa
- .class.php → Arquivo PHP contendo uma classe ou podemos iniciar a classe com letra maiúscula

- [ ]  Delimitadores de código

> O código PHP deve ser escrito dentro dos delimitadores de código, pois se o código estiver fora dos delimitadores não será interpretado

```php
<?php

Aqui vai todo 

nosso código PHP

?>
```

- [ ]  Comentários

> Comentários, serve para passar alguma informação sobre nosso código, ou descrever algo sobre as classes, mas devemos tomar muito cuidado com os comentários, para não ficar aquele código cheio de comentários, e comentar somente quando necessário

```php
// Comentario de uma linha

/**
	Comentario de
	varias linhas
*/
```

- [ ]  Comandos de saída → Output

> Os comandos de saída são usados para gerar uma saída na tela, são chamados de output

`echo` → É um comando usado para imprimir variáveis no console

```php
echo 'Hello World';
```

`print` → É uma função que imprime string no console

```php
print ('Hello World');
```

`var_dump` → É uma função usada para debug no código, quando o parâmetro for um objeto, ele mostra todos os atributos, se for um array de várias dimensões, ele imprimira todos os conteúdos e dados

```php
$dados = array('firstName', 'lastName');

var_dump($dados);
```

`print_r` → tem a mesma função que o `var_dump`, a única diferença que seu formato e mais legível para quem esta programando.

```php
$dados = array('firstName', 'lastName');

print_r($dados);
```

## Variáveis

- [ ]  Variáveis

> Variáveis e conhecida como identificadores utilizados para representar valores mutáveis e voláteis, que se mantem existente na execução do programa, elas ficam alocada na memória RAM e todo seu conteúdo e destruído após a execução do programa. Para criar uma variável em PHP, é necessário usar um identificador conhecido como cifrão ou dólar (`$`). PHP é case-sensitive, é sensível a letras maiúscula e minúscula. devemos ter muita atenção ao declarar variáveis e nomes de funções, pois a variável `$dados` é tratado de uma forma e a variável `$Dados` é tratado como uma outra variável com valor totalmente diferente, então necessário sempre manter o padrão de declaração

- Cuidados

    Nunca iniciar uma variável com números

    Nunca utilizar espaços em brancos no meio do identificador

    Nunca utilizar caracteres especiais (! @ # % ^ & * / | [] {} )

    Nunca criar variáveis com nomes longos e sem clareza, devemos sempre ser claro nome passado para uma variável  

```php
<?php

$firstName = "Allan";
$lastName = "Rodrigues";

echo "$firstName, $lastName";

?>
```

- [ ]  Booleano

> Um tipo booleano expressa um valor lógico, que tem seu valor como verdadeiro ou falso, para especificar um valor bool, devemos sempre utilizar as palavras-chave `true` ou `false`

- Cuidados → São considerados valores falsos

    Inteiro ()

    Ponto Flutuante 0.0

    Uma string vazia "" ou "0"

    Um array vazio

    Um Objeto sem elementos

    Tipo NULL

```php
<?php

$dados = true;

if($dados){
	echo "Retornar TRUE";
}else {
	echo "Retornar FALSE";
}

?>
```

- [ ]  Tipo numérico

> Números podem ser especificados em notação →  Decimal (Base 10) Hexadecimal (Base 16) Octal (Base 8)

```php
<?php

	$a = 12345; // Número Decimal

	$a = -1234; // Número Negativo

	$a = 01234; // Número Octal -> Equivalente a 668 em decimal
	
	$a = 0x14; // Número Hexadecimal -> Equivalente a 20 em decimal
	
	$a = 1.2345; // Ponto flutuante

	$a = 4e23; // Notação científica

?>

```

- [ ]  Tipo String

> Uma string é basicamente uma cadeia de caracteres alfanuméricos, para declarar uma string devemos utilizar aspas simples `' '` ou aspas duplas `" "`

- Diferenças → Aspas simples tem valor estático, o valor apresentado será exatamente o que o valor descrito entre aspas, já a aspas duplas irá interpretar a variável conforme seu valor dentro contexto

```php
<?php
	
$firstName = 'Meu Nome';
$lastName = "Meu Sobrenome"
	

?>
```

- [ ]  Array

> Array são valores armazenados na memória, eles podem ser de tipos diferentes, e podem ser acessado a qualquer momento, pois cada valor esta relacionado a uma chave, um array também cresce dinamicamente com a inclusão de novos itens

```php
<?php
	$dado = array ('Nome', 'Sobrenome');

	echo $dado[1];

?>
```

- [ ]  Objeto

> Um objeto é uma entidade com um determinado comportamento definido por seus métodos e propriedades. Para criar um objeto devemos usar seu operador `new`

```php
 <?php

class Dados {
	var $meuDado;
function $firstName(){
	echo "Meu nome é {$this->meuDado}";
	}
}

$obj = new Dados;
$obj->meuDado = "João";
$obj->firstName(); 

?>
```

- [ ]  Recurso

> `Resource` é uma variável especial, ela é usada por funções especiais, como uma conexão ao banco de dados

```php
<?php

resource mysql_connect(...)

?>
```

- [ ]  Misto

> `mixed` representa múltiplos tipos de dados em um mesmo parâmetro, e também indica que a função aceita diversos tipos de dados

```php
<?php

	string gettype (mixed var)

?>
```

## Constantes

- [ ]  Constante

> Constante é um valor que não pode ser alterado de forma alguma durante a execução do programa, contendo somente valores escalares. Um valor escalar não pode ser complementado com outros valores, como os vetores e objetos, e muda que o valor constante não contente o cifrão ($) e geralmente e usado nomes em maiúsculo → `DADOS_CLIENTE` e podemos definir a constante com a função `define()`

```php

<?php

define("DADOS_CLIENTE", "João maria");

echo DADOS_CLIENTE;

?>
```

## Operadores

- [ ]  Atribuição

> Um operador de atribuição é utilizado para atribuir um valor, e o operador básico de atribuição é `=`. Temos também o incremento e o decremento

```php
$a += 10; // Soma 10 em $a
$a -= 10; // Subtrai 10 em $a
$a *= 10; // Multiplica 10 por $a
$a /= 10; // Divide $a por 10

++$a // Pré-incremento -> Incrementa a variável e retornar a variável
$a++ // Pós-incremento -> Retorna a variável e incrementa a variável em um
--$a // Pré-decremento -> Decrementa a variável e retornar a variável
$a-- // Pós-decremento -> Retorna a variável e decrementa a variável em um
```

- [ ]  Aritméticos

> Operadores aritméticos são utilizados para realização de cálculos matemáticos.

- `+` → Adição
- `-`→ Subtração
- `*`→ Multiplicação
- `/` → Divisão
- `%`→ Módulo (Resto da divisão)

```php
<?php

$a = 10;
$b = 20;

echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

?>
```

- [ ]  Relacionais

> Operadores relacionais são utilizados para realizar comparações entre valores e expressões, e o resultado sempre será um valor boolean (TRUE ou FALSE)

- `==`→ Igual. Retorna TRUE se as expressões forem iguais
- `===` → Idêntico. Retorna TRUE se as expressões forem iguais ou do mesmo tipo de dados
- `!=` → Diferente. Se as variáveis forem diferente ele retorna TRUE
- `<`→ Menor
- `<=` → Menor ou igual
- `>` → Maior
- `>`= → Maior ou igual

```php

<?php
$a = 30;

if($a = 30){
	echo "Retornar TRUE";
}

?>
```

```php
<?php

$a = 1234;
$b = '1234';

if($a == $b){
	echo "Tem o mesmo valor, retorna true";
}else{
	echo "Tem valores diferente, retorna false";
}

if($a === $b){
	echo "Tem o mesmo valor, retorna true";
}else{
	echo "Tem valores diferente, retorna false";
}

?>
```

- [ ]  Lógicos

> Operadores lógicos são utilizados para combinar expressões lógicas entre si

- `and` → E. TRUE, se variável $a quanto $b forem TRUE
- `or` → OU. TRUE, se variável $a ou $b forem TRUE
- `xor` → XOR. TRUE, se $a ou $b forem TRUE, de forma exclusiva

- `!` $a → NOT. TRUE, se a variável $a for FALSE
- $a `&&` $b → E. TRUE, se a variável $a quanto a $b forem TRUE
- $a `||` $b → OU. TRUE, se a variável $a ou $b forem TRUE

```php
<?php
$tempoBom = true;
$dinheiro = true;

if($tempoBom && $dinheiro){
	echo "O Tempo esta bom e tenho dinheiro, vamos sair");
} else{
	echo "O tempo não esta bom e não tenho dinheiro, não vamos sair");
}

?>
```

```php
<?php

$tempoBom = false;
$tempoRuim = true;

if($tempoBom || $tempoRuim){
	echo "Vamos pensar em sair";
}else{
	echo "Não vamos sair";
}

?>
```

```php
<?php

$tempoBom = false;
$tempoRuim = false;

if(!$tempoBom || $tempoRuim){
	echo "Vamos sair";
}else{
	echo "Não vamos sair";
}

?>
```

## Estrutura de controle

- O `if` é uma estrutura de controle que introduz um desvio condicional. Caso a condição dada pela expressão seja atendida, ele retorna o que esta dentro do bloco de comando `if`, caso não seja atendida ele ignora o bloco. O comando `if` poder ser lido "SE (expressão) ENTÃO {comandos }".

- O `else` é utilizado para informar um novo bloco de comando, caso a condição do `if` não seja atendida ele cai na condição do `else`. O comando `else` pode ser lido "CASO CONTRARIO (expressão)".  E a utilização do `else` não é obrigatória no código, mas é sempre bom esta utilizando para manter uma sequencia logica no código

- [ ]  if

> O construtor `if`, tem sua expressão avaliada por valores booleanos, que pode retornar TRUE ou FALSE, no caso do `if` seu retorno sempre será TRUE, pois sua condição inicial e verdadeira caso contrario ele ignora e retorna FALSE

```php
<?php
$a = 10;
$b = 5;

if($a > $b){
	echo "Retorna um valor TRUE";
}

?>
```

- [ ]  else

> O construtor `else`, sempre vai retornar um valor `FALSE`, pois ele é uma extensão da expressão `if`, caso a expressão `if` não seja atendida, ele retornar o `else` que tem seu valor como `FALSE`

```php
<?php
$a = 10;
$b = 5;

if($a < $b) {
	echo "Retorna um valor TRUE";
}else { 
	echo "Retorna um valor FALSE";
}

?>
```

- [ ]  While

> O `while` é muito parecido com o `if`, ele será executado enquanto a expressão for verdadeira, e também tem um bloco de comandos. A diferença que o `while` ele vai ficar em um laço de repetição enquanto a expressão passada for verdadeira o laço só será finalizado quando a condição for atendida. ele pode ser lido "ENQUANTO (expressão) FAÇA {comandos}.

```php
<?php 

$a = 1;

while($a <= 5){
	echo "Numero " . $a . '<br>';
	$a++;
}

?>
```

- [ ]  for

> `For` basicamente é um contador, o  `for` ele é controlado por um bloco de três comandos que estabelecem um sequencia de contagem, e ele só será executado por uma certa quantidade de vezes.

```php
<?php

for($a = 1; $a <= 10; $a++){
	echo "Numero " . $a . '<br>';
}

?>
```

- [ ]  Switch

> O comando `switch`, simula uma bateria de teste, sobre uma variável, ela faz a comparação da mesma variável (expressão), com diferentes valores, e executa pedaços diferentes do código dependendo de qual valor ela é igual

```php
<?php

$payment = "Awaiting payment";

switch ($payment){
	case "Awaiting payment": 
    	echo "Aguardando pagamento";
        break;
	case "Payment accepted":
    	echo "Pagamento aprovado";
        break;
	case "Payment declined":
    	echo "Pagamento recusado";
        break;
    default:
    	echo "Forma de pagamento invalida";
}

?>
```

- [ ]  break - continue

> O comando `continue`, quando executada em bloco de comandos for/while, ignora toda as instruções restante até o fechamento em "}", e o programa segue para próxima verificação

> O comando `break` aborta a execução de blocos de comandos, como if, while, for.

- [ ]  foreach

> O `foreach` é uma maneira mais fácil de iterar sobre arrays ou matrizes. ele decompõe um vetor ou matriz em cada um de seus elementos por meio de suas cláusula

```php
<?php

$dado = array ("nome", "Sobrenome", "email");

foreach ($dado as $valor){
	echo "Meus dados são - " . $valor . '<br>';
}

?>
```

## Requisição de arquivos

- [ ]  include

> O `include`, avalia o arquivo informado, e o seu código (variáveis, arrays e objetos) entra no escopo do programa. Tornando disponível a partir da linha da inclusão e se o arquivo não existe ele acabando dando um erro (warning)

```php
<?php

include 'arquivo.php';

?>
```

- [ ]  require

> O `require` tem a mesma função que include, mas sua diferença que ele reproduz um FATAL ERROR caso o arquivo não exista, e trava a aplicação, o include só vai apresentar uma mensagem

```php
<?php

require 'arquivo.php'

?>
```

- [ ]  include_once - require_once

> O `include_once`, tem a mesma funcionalidade do include, mas sua diferença é que caso o arquivo já tenha sido incluído, ele acaba não refazendo a operação, o arquivo é incluído apenas uma vez, e bom usar quando o programa passa por mais de uma instrução, ai acaba evitando redeclarações

```php
<?php

ncludei_once 'arquivo.php'

?>
```

- [ ]  require_once

> O `require_once`, tem a mesma funcionalidade do require, mas sua diferença é que caso o arquivo já tenha sido incluído, ele acaba não refazendo a operação, o arquivo é incluído apenas uma vez, e bom usar quando o programa passa por mais de uma instrução, ai acaba evitando redeclarações

```php
<?php

require_onde 'arquivo.php'

?>
```

## Manipulação de funções

- [ ]  function

> Uma função tem um objetivo específico, encapsulado sob uma estrutura, onde recebe parâmetros e retorna um dado. A função e declarada uma única vez, mas pode ser chamada varias vezes, sua maior característica e a reusabilidade. Para criar uma `function` devemos passar um nome sem espaços em branco e iniciando com uma letra, e na mesma linha passamos os parâmetros que a função irá receber, separado por virgulas, e encapsulamos por chaves, e no final usando `return` para retornar o resultado da `function`

```php
<?php

function soma($a, $b){
	$resultado = $a + $b;
	return $resultado;
}

echo "O resultado da soma é " .  (soma (10,20));

?>
```

- [ ]  Variáveis globais

> As variáveis globais, podem ser acessadas fora do contexto de uma função sem passá-la como parâmetro, mas para fazer isso é necessário declará-la como global. E partir disso ele pode ser acessar em qualquer ponto da aplicação

```php
<?php

$a = 2000;
$b = 10;
function divisao($a, $b){
    global $a, $b;
    $resultado = $a / $b;
    return $resultado;
}

echo "O resultado da divisão é " . divisao($a, $b);

?>
```

- [ ]  variáveis estáticas

> Variáveis estática, mantêm o valor que lhe foi passado, na ultima execução, elas podem ser armazenadas dentro do escopo da função

```php
<?php

function soma($a, $b){
	static $resul;
    $total = $a + $b;
    echo "A soma dos valores $a + $b foi $total";
}

soma(10, 20);
soma(10, 1000);

?>
```

- [ ]  passagem de parâmetros

> Temos dois tipos de passagem de parâmetros, por valor`(by value)` e por referência`(by reference)`. Por padrão os valores são passados por valor em funções, assim o valor é tratado como uma variável, dentro do contexto da função, e assim não altera o seu valor externo. Para passar uma passagem de parâmetros por referencia, basta apenas utilizar o operador `&` na frente do parâmetro, para que a função sobre a variável seja avaliada no contexto externo.

```php
<?php

// (by Valeu)

function soma($a, $b){
	$a += $b;
}

$c = 20;
soma($c, 30);

echo $c;

?>
```

```php
<?php

function soma(&$a, $b = 25){
	$a += $b;
}

$c = 20;
soma($c);

echo $c;

?>
```

- [ ]  Argumentos variáveis

> A função `func_get_args()` e  `func_num_args()` nos permite definir função com numero de argumentos variáveis, podendo obtê-los de forma dinâmica, mesmo não sabendo quantos são. Para saber quais são utilizamos a `func_get_args()` e para saber a quantidade de argumentos utilizamos `func_num_args()`

```php
<?php

function dados(){
	$nome = func_get_args();
  $dados = func_num_args();
    
    for($a = 0; $a < $dados; $a++){
        	
            echo "Meu nome é " . $nome{$a} . '<br>'; 
        }
	}
    
    dados('jose' , 'maria' , 'joão', 'rosa');

?>
```

- [ ]  recursão

> A função recursiva tem como seu principal foco em percorrer uma arvore ou um grafo, e árvore e muito comum sua utilização, para inserir, pesquisar ou excluir elementos. Como são utilizados ponteiros para ligar um nó até outro. assim a função recursiva facilita acessar os próximos nós.

```php
<?php

function fatorial($a){
	if($a == 1){
    	return $a;
    }else{
    	return $a *fatorial($a - 1);
    }
}

echo fatorial(4)

?>
```
