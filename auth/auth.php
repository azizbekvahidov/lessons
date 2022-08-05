<?php
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";

    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
        $pass = crypt($_POST["password"],"pass");
       $res = $connect->query("select * from users where login = '{$_POST["login"]}' AND password = '{$pass}'");
       if($res){
            $user = $res->fetch_assoc();
            setcookie("name",$user["name"],time()+3600,"/");
            setcookie("role",$user["role_id"],time()+3600,"/");
            header("Location: /");
       }
       else{
        header("Location: /auth/login.php?message=Login or password incorrect");
       }
    }
    else{
        echo "bad information";
    }


?>