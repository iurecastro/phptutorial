<?php

$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);


if(!isset($contact)){
    $errors['contact'] = "Please select at least an option.";
}


if(count($errors)){
    require 'get.php';
}else{
    echo 'You selected to be contacted via <strong> '. $contact . '</strong>.	<a href="index.php">Back to the form</a>';
	
	
}

?>