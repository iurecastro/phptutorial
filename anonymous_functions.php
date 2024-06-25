<?php

//passing anonymous function to another function

$list = [10,20,30];

$result = array_map(function ($element){
    return $element * 2;
}, $list);

echo '<pre>';
print_r($result);


//*********************************************************** */

//anonymous function 
$multiply = function($x,$y){
    return $x * $y;
};

echo $multiply(5,3);


//*********************************************************** */
//Scope of the anonymous function


$message = 'Hi';
$say = function() use($message){
        echo $message;
};

$say();
?>