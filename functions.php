<?php

function welcome_user($username){
   return "Welcome ". $username;
}



echo welcome_user("Admin");







function calc($a, $b){
    return $a+$b;
}

echo calc(10,20);

?>