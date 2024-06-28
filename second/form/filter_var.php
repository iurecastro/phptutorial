<?php

if(filter_has_var(INPUT_GET, 'id')){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    var_dump($id);
}else{
    echo 'id is required.';
}




?>