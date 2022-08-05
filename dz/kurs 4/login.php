<?php
if(isset($_COOKIE['login'])){
    header("Location: index.php");
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
    <form action="auth.php" method="post" id="loginform">
        Login: <input type="text" name = "login"><br><br>
        Parol: <input type="password" name = "password"><br><br>
        <input id="submitBtn" type="button" value="submit">
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        var btn = $("#submitBtn");
        btn.click(function(){
            var form = $("#loginform");
            console.log(form.serialize());
            $.ajax({
                url: "auth.php",
                data: form.serialize(),
                type: "POST",
                success: function(val){
                    form.css("display","none");
                },
                error: function(val){

                }
            });
        });
    </script>
</body>
</html>

