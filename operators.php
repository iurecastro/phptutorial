<?php

$x = 10;
$y = 15;

$total = $x + $y;

echo $total;

// Addiction
$total +=  $x;
$total = $total + $x;

//Subtration

$total -=  $x;
$total = $total - $x;


//Division

$total /=  $x;
$total = $total / $x;

//multiplication

$total *=  $x;
$total = $total * $x;


echo $total;


//identical operator
var_dump($x === $y);

//Not identical operator
var_dump($x !== $y);

//Greater than


$price = 100;
$qtd = 5;



$dicounted = $qtd>3 && $price > 99;

var_dump($dicounted);



/**-------------------------------------------------------- */

$debug = true;

$debug && print("PHP IS HERE!");






?>

