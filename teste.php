
<?php

echo '<pre>';
        $nums = [5,7,8,9,3,2,1];
        $aux = 0;
        for($i=0; $i< count($nums); $i++){
                if($nums[$i] > $aux){
                    $aux = $nums[$i];                    
                }
        }
        var_dump($aux);

        