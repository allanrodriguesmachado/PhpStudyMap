
<?php



function soma(&$valor1, $valor2){
    $valor1 += $valor2;
}

$valor3 = 20;
soma($valor3, 30);
echo $valor3;