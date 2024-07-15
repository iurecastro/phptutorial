<?php
    require "inc/header.php";
    require "config.php";

    //Data source name
    $dsn = "mysql:$host,dbname=$db;charset=UTF8";



    try{
        $pdo = new PDO($dsn, $user, $password);

        
        
        if($pdo){
            echo '<div class="alert alert-success" role="alert">';
                echo "Connected!";                
            echo '</div>';
        }

    }catch (PDOException $e){

        echo '<div class="alert alert-danger" role="alert">';  
        echo $e->getMessage();
        echo '</div>';
    }     




    require 'inc/footer.php';


?>