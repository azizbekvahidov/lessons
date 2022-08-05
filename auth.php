<?php 
    $login = "aziz";
    $password = "1090";

    if($_POST["login"] == $login && $_POST["password"] == $password){
        setcookie("auth",$login,time() + 10);
        echo "siz avtorizatsiyadan utdingiz";
    }
    else{
        echo "login yoki parol notugri";
    }

echo "<br><br><a href='index.php'> to index </a>";
