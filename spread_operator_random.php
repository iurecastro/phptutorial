<?php
echo '<pre>';
function getRandomNumbers(){

    for($i=0 ; $i < 20 ; $i ++){
        $randon_numbers[] = rand(1,100); 
    }

    return $randon_numbers;
}

$randon_numbers = [...getRandomNumbers()];


print_r($randon_numbers);

?>