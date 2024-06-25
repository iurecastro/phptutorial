<?php

$user = [
    'username' => 'admin',
    'email' => 'test@test.com',
    'is_active' => '1' 
];

$properties = array_keys($user);




echo '<pre>';
print_r($properties);

?>