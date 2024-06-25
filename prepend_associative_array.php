<?php

//prepending associative array

$colors = [
    'Green' => '#ff000',
    'Red' => '#f4f4f',
    'Blue' => '#f40f4',
];

$colors = ['black' => '#f4f4f'] + $colors ;

print_r($colors);

?>