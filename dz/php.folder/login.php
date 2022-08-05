<?php
if(isset($_POST['logout'])){
    setcookie('login',$login);
    setcookie('parol',$parol);
}
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
    <form action="auth.php" method="post">
        Login: <input type="text" name = "login"><br><br>
        Parol: <input type="password" name = "password"><br><br>
        <input type="submit">
    </form>
</body>
</html>

