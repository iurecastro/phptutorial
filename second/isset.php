<?php
$x = null;

echo "<pre>";

var_dump(isset($x));

var_dump(empty($x));

$_POST['email'] = "test@test.com";

//check if POST email is set 
if(isset($_POST['email'])){
    var_dump($_POST['email']);
}


$count = "";
var_dump(empty($count));


?>