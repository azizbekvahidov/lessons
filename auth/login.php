<form action="/auth/auth.php" autocomplete="off" method="post">
<input type="text" name="login" autocomplete="off" placeholder="Login"><br>
<input type="password" name="password" autocomplete="off" placeholder="password"><br>
<input type="submit" value="login" >
</form>

<?php
if(isset($_GET["message"]))
    echo "<h1>{$_GET["message"]}</h1>"
?>