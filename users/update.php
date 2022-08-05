<?php
print_r($_POST);
if(!empty($_POST)){
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";

    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
        $pass = crypt($_POST["password"],"pass");
       $res = $connect->query("Update users set name = '{$_POST["name"]}', login = '{$_POST["login"]}', birth = '{$_POST["birth"]}',password = '{$pass}', role_id = {$_POST["role"]} where id = {$_GET["id"]}");
       if($res){
            header("Location: /users/index.php");
        }
    }
    else{
        echo "bad information";
    }
}
?>