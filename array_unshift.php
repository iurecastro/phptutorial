<?php

$permissions = [
    'edit',
    'view',
    'delete',
];

array_unshift($permissions, 'new','approve', 'reject');
print_r($permissions);

?>