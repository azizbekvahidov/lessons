<?php
    $login = $_POST["login"];
    $parol = $_POST["password"];

    if( $login == "farrukhshomurodov" &&  $parol == "0000"){        
        setcookie('login',$login);
        setcookie('parol',$parol);
        echo "молодець что запомнил пароль <br> <form action='login.php' method='post'><input type='submit' name='logout' value='Log out'><form>";

    }else{
        echo "не правильный пароль или логин";
    };



?>