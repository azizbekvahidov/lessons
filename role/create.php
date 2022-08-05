<?php

if(!empty($_POST)){
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";

    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
        
       $res = $connect->query("Insert into role (name) 
                values ('{$_POST["name"]}')");
        if($res){
            header("Location: /role/index.php");
        }
    }
    else{
        echo "bad information";
    }
}
?>