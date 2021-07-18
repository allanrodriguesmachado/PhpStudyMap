
<?php

for($a = 1; $a <= 10; $a++){
    if($a % 2 === 0){
        continue;
    }

    if($a > 7){
        break;
    }

    echo "Pulou + 2 :: {$a}";
}
