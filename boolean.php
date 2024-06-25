<?php

//These are boolean types

$is_submitted = false;
$is_valid = true;

$is_email_valid = false;

var_dump(is_bool($is_email_valid));


//integer

$amount = 100;
var_dump(is_int($amount));


//Float types

$price = 5.500;

echo is_float($price);



$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // return false


echo "<br/>";

$name = "jonh";
echo "Name: {$name}";

echo "Name: $name";


// String type;


echo "<br/>";

$str = "This is a message";


$count_space = 0;
for($i = 0; $i < strlen($str);$i++){
    if($str[$i] == " "){
        $count_space = $count_space + 1;
    }
}
echo $count_space;

?>