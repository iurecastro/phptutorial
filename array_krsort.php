<?php
$employees = [
    'john' => ['age' => '24' , 'title' => 'Front-end Developer'],
    'alice' => ['age' => '28' , 'title' => 'Web Designer'],
    'bob' => ['age' => '25' , 'title' => 'Mysql DBA'],

];

krsort($employees, SORT_STRING);

echo '<pre>';
print_r($employees);

?>