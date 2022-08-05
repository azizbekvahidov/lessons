<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=setcookie("auth","",time() - 1 );?>
    <form action="auth.php" method="POST">
        Login: <input type="text" placeholder="login" name="login"><br><br>
        Parol: <input type="password" placeholder="parol" name="password"><br><br>
        <input type="submit">
    </form>
</body>
</html>