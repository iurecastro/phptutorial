<?php

$roles = [
    'admin' => 1,
    'editor' => 2,
    'approver' => 3,
    'creator' => 4
]; 


$result = array_key_exists('admin', $roles);



var_dump(isset($result));


var_dump($result);

echo '<br/>';
echo '<br/>';

$post = [
    'title' => 'This is the title of the post',
    'description' => null
];

var_dump(array_key_exists('description', $post));

var_dump(isset($post['description']));




?>