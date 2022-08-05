<?php
    $login = $_POST["login"];
    $parol = $_POST["password"];

    if( $login == "farrukhshomurodov" &&  $parol == "0000"){        
        setcookie('login',$login, time());
        echo "молодець что запомнил пароль <br> <a href='index.php'>на главную</a> ";

    }else{
        echo "не правильный пароль или логин";
    };



?>