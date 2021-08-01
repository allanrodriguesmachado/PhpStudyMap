
<?php



function fatorial($numero){
    if($numero <= 1){
        return $numero;
    }else{
        return $numero * fatorial($numero - 1);
    }
}

//4*3*2 = 24
echo fatorial(4);