<?php

session_start();

require 'inc/header.php';
require 'inc/functions.php';

$pizza_toppings = [
    'pepperoni' => 0.5,
    'mushrooms' => 1,
    'onions' => 1.5,
    'sausage' => 2.5,
    'bacon' => 1,
    'extra cheese' => 1.5,
    'black olives' => 1,
    'green peppers' => 1,
    'pineapple' => 2,
    'spinach' => 1.5,
    'tomatoes' => 1,
    'chicken' => 2.5,
    'jalapenos' => 1,
    'anchovies' => 2,
    'artichokes' => 2,
    'ham' => 2,
    'salami' => 2,
    'garlic' => 0.5,
    'basil' => 0.5,
    'prosciutto' => 3,
    'roasted red peppers' => 1.5,
];

$request_method = $_SERVER['REQUEST_METHOD'];

if($request_method === 'GET'){
    require 'inc/get.php';
}elseif($request_method === 'POST'){
    require 'inc/post.php';
}


require 'inc/footer.php';

?>