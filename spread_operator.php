<?php
$numbers = [1,2];
$scores = [...$numbers, 3, 4];

echo ('<pre>');
print_r($scores);


$even = [2,4,6];
$odd = [1,3,5];

$all = [...$even, ...$odd];

print_r($all);


?>