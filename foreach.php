<?php


//This is a loop foreach for indexers arrays
$colors = ["Red","Green","Blue"];


foreach($colors as $color){
    echo $color . "<br/>";
}



//This is a loop foreach for associatives arrays



$capitals = [
    "Japan" => "Tokyo", 
    "France" => "Paris",
    "United Kingdom" => "London",
    "Japan" => "Tokyo",
];

echo  "<br/>";
foreach($capitals as $country=>$capital){
    echo "<br/>";
    echo "The capital city of $country is $capital";
}


?>