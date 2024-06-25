<?php
//************** PHP TYPES OF VARIABLE ************** */


// ***************** scalar types ********************

// Integer
$num = 1;
$page_size = 10;

//Float
$price = 5.5;
$tax = 1.5;

//Boolean type
$is_admin = true;
$is_user_logged_in = false;

//String 
$str = "PHP Scalar type";
$message = "PHP data type";

// ********************* end scalar types **************


// **************** Compound Types **********************

//Array
// Indexed array use numeric indexes as a key 
$carts = ['laptop','mouse','keyboard'];
echo $carts[0];
echo $carts[1];
echo $carts[2];


//Array
//Assosiative array use strings as a key

$prices = [
    'laptop' => 1500,
    'mouse' => 200,
    'keyboard' => 300
];
echo $prices['laptop'];
echo $prices['mouse'];
echo $prices['keyboard'];


// Objects are compound type

// **************** End Compound Types **********************



?>