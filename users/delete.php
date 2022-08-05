<?php

if(!empty($_GET)){
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";

    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
       $res = $connect->query("Delete from users where id = {$_GET["id"]}");
       if($res){
        header("Location: /users/index.php");
        }
    }
    else{
        echo "bad information";
    }
}
?>