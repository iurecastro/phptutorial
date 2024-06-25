<?php

//get the sum whithout parameters
function sum(){
    $numbers = func_get_args();
    $total = 0;
    for($i = 0; $i < count($numbers); $i++){
        $total += $numbers[$i];    
    }
    return $total;
}

echo sum(10,20) . '<br/>';
echo sum(10,20,30) . '<br/>';


?>