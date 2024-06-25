<?php

echo '<pre>';

$numbers = [1,5,3,4,2];

sort($numbers);

print_r($numbers);


$names = ['Bob','Alice', 'John'];

sort($names, SORT_REGULAR);


print_r($names);


$ranks = ['A-1', 'C-1' , 'B-1' , 'B-2' , 'C-2' , 'B-3', SORT_STRING | SORT_NATURAL];

rsort($ranks);

print_r($ranks);



?>