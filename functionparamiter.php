<?php
function concat($str1,$str2){
    return $str1 . $str2;
}


$greeting = concat(
    'Welcome', 
    'Home'
);

echo $greeting;

?>