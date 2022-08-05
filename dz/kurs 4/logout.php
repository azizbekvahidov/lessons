<?php

if(isset($_COOKIE["login"])){
    setcookie("login","", time() - 1);
    
    header("Location: index.php");
}

?>