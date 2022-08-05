<?php
    $row = [];
    if(isset($_GET["id"])){
        $host = "192.168.1.205";
        $user = "root";
        $pass = "198923233171";
        $db = "practice";

        $connect = new mysqli($host,$user,$pass,$db);
        if($connect){
        $res = $connect->query("select * from role where id = {$_GET["id"]}");
            $row = $res->fetch_assoc();
        }
        else{
            echo "bad information";
        }
    }
    
?>

<form action="/role/<?=(isset($_GET["id"]) ? "update.php?id={$_GET["id"]}" : "create.php")?>" method="POST">
    <input type="text" placeholder="ismi" name="name" value="<?=(!empty($row) ? $row["name"] : "")?>"><br>
    <input type="submit">
</form>