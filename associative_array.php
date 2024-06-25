
<?php


$html['title'] = 'PHP - Associative arrays';
$html['description'] = 'Learn how to use associative arrays in PHP.';

foreach($html as $key=>$attribute){
    echo $attribute . '<br/>'. '<br/>'. '<br/>';
    echo $key. '<br/>'. '<br/>';
}

echo '<pre>';
print_r($html);



?>