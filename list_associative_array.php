<?php

$person = [
    'first_name' => 'John' ,
    'last_name' => 'Doe',
    'age' => 25
];

list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age
) = $person;

var_dump($first_name,$last_name, $age );

?>