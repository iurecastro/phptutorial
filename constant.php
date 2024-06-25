<?php

define('WIDTH' , '1440px');


define('ARRAY_CONSTANT' , [0,1,2,3,4]);

echo "<pre>";

for($i = 0; $i < count(ARRAY_CONSTANT); $i++){
    echo  ARRAY_CONSTANT[$i] . "\n";
    
}



var_dump(ARRAY_CONSTANT);


echo WIDTH;



const CONSTANT_NAME = true;




/* 
Tax Calculation

*/


const TAX_RATE = 0.85;

$gross_price = 150;


$net_price = $gross_price * (1 + TAX_RATE);

echo $net_price;



const RGB = ["Red","Green","Blue"];

var_dump(RGB);
?>