<?php


$serverSide = ['PHP'];
$clientSide = ['JavaScript', 'CSS', 'HTML'];
$fullStack = array_merge($serverSide, $clientSide);


echo '<pre>';

print_r($fullStack);


$before = [
    'PHP' => 2,
    'JavaScript' => 4,
    'HTML' => 4,
    'CSS' => 3,

];
$after = [
    'PHP' => 5,
    'JavaScript' => 5,
    'MySql' => 4,

];

$skills = array_merge($before, $after);

print_r($skills);

?>