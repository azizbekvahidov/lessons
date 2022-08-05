<?php
    $login = $_POST["login"];
    $parol = $_POST["password"];
    if( $login == "hello" &&  $parol == "1001"){
        setcookie('login',$login,time()-1);
        setcookie('parol',$parol,time()-1);
        echo "Hammsi tugri";
    }else{
        echo "No tugri login yoki parol terilgan";
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Menu</a>
</body>
</html>
