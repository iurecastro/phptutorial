<?php
$colors = [
    ['red','green', 'blue'],
    ['cyan','magenta', 'yellow', 'black'],
    ['hue','saturation', 'lightness'],
];


if(in_array(['red',  'green', 'blue'], $colors)){
    echo 'RGB colors found';
} else{
    echo 'RGB are not found';
}


?>