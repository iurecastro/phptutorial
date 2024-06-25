<?php

$urls = parse_url('https://iure.uk/');





list( 

    'scheme' => $scheme,
    'host'=> $host,
    'path' => $path,



) = $urls ;

echo $scheme . $host . $path ;

?>