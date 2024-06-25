<?php

$role = 'admin';
$message = '';

switch($role){
    case 'admin':
        $message = "Welcome admin";
        break;
    case 'author':    
        $message = "Welcome author";
        break;
    case 'editor':    
        $message = "Welcome editor";
    default:
        $message = 'You are not  authorized user!';        
}

echo $message;


?>