<?php

if(!empty($_POST)){
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";

    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
        $pass = crypt($_POST["password"],"pass");
       $res = $connect->query("Insert into users (name,login,birth,role_id,password) 
                values ('{$_POST["name"]}','{$_POST["login"]}','{$_POST["birth"]}',{$_POST["role"]},'{$pass}')");
        if($res){
            header("Location: /users/index.php");
        }
    }
    else{
        echo "bad information";
    }
}
?>