<?php
require 'inc/header.php';



$contacts = [
    'email' => 'Email',
    'phone' => 'Phone'
];

$errors = [];

 $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

 if($request_method === 'GET'){
    require 'inc/get.php';
 }elseif($request_method === 'POST'){
    require 'inc/post.php';
 }





require 'inc/footer.php';


?>