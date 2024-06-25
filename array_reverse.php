<?php
$numbers = [1,2,3,4,5,6];
$reversed = array_reverse($numbers);

echo '<pre>';
print_r($numbers);

print_r($reversed);



$book = [
    'PHP Awesome',
    999,
    ['Programming','Web Development'],
];


//Use true to preserve the index of array of book
$preserved = array_reverse($book, true);

print_r($preserved);

?>