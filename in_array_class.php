<?php

class Role{
    private $id;
    private $name;
    
    public function __CONSTRUCT($id, $name){
        $this->id = $id;
        $this->$name = $name;
    }



}



$roles = [
    new Role(1, 'admin'),
    new Role(2, 'editor'),
    new Role(3, 'subscribe'),
];
//to use strict mode use true on the function, to check the types 
if (in_array(new Role(1,'admin'), $roles, true)) {
    echo 'found it';
}else{
    echo 'Not found';
}



?>