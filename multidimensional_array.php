<?php
//array bidimencional
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 5],
    ['Do', 3],

];

echo $tasks[4][3];
//add elements at the end of array
$tasks[] = ['Build something in php' , 2];



foreach($tasks as $k=>$task){
    foreach($task as $task_detail){
        echo $task_detail;
        echo '<br/>';echo '<br/>';
    }
}

echo '<br/>';echo '<br/>';

