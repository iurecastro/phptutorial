<?php

$scores = [1,2,3,4,5,6,7,8,9,10];

$scores2 = array(1,2,3,4);

echo '<pre>';
var_dump($scores);
var_dump($scores2);

unset($scores2[3]);
var_dump($scores2);

echo count($scores);
echo count($scores2);

?>