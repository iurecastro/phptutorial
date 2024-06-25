<?php

$actions = [
    'new',
    'edit',
    'update',
    'view',
    'delete',

];

$result = in_array('update1', $actions);

var_dump($result);


$user_ids = [10 , '15', '20', 30];

$result = in_array(15, $user_ids, true);

var_dump($result);







?>