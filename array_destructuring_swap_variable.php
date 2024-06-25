<?php

$x = 10;
$y = 20;

$tmp = $x;
$x = $y;
$y = $tmp;

var_dump($x,$y);


//Now you can do it more easy:
[$x , $y] = [$y, $x];

var_dump($x,$y);




[
    'dirname' => $dirname,
    'basename' => $basename,

] = pathinfo('c:\temp\readme.txt');

var_dump($dirname, $basename);



       
?>