<?php

//spaceship operator compares two expressions and returns -1, 0, or 1 when $x is respectively less than, equal to, or greater than $y
$numbers = [2,1,3];

usort($numbers, function($x, $y){
    return $x <=> $y;
});

echo '<pre>';

print_r($numbers);

?>