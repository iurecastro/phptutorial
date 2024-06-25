<?php

$tasks = [ 
    ['Task 1' , 1 ],
    ['Task 4' , 3 ],
    ['Task 3' , 5 ],
    ['Task 2' , 8 ],

];

usort( $tasks, function ($a, $b){
    return $a[1] <=> $b[1];
} );

echo '<pre>';
print_r($tasks);


?>