<?php
    $row = [];
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";
    $roles = [];
    $connect = new mysqli($host,$user,$pass,$db);
    if($connect){
        if(isset($_GET["id"])){
            $res = $connect->query("select * from users where id = {$_GET["id"]}");
            $row = $res->fetch_assoc();
        }
        $roles = $connect->query("select * from role ");
    }
    else{
        echo "bad information";
    }
    
?>

<form action="/users/<?=(isset($_GET["id"]) ? "update.php?id={$_GET["id"]}" : "create.php")?>" method="POST">
    <input type="text" placeholder="ismi" name="name" value="<?=(!empty($row) ? $row["name"] : "")?>"><br>
    <input type="text" placeholder="login" name="login" value="<?=(!empty($row) ? $row["login"] : "")?>"><br>
    <input type="date" placeholder="birth" name="birth" value="<?=(!empty($row) ? $row["birth"] : "")?>"><br>
    <input type="text" placeholder="password" name="password"> <br>
    <select name="role" >
        <?php
        for($i = 0; $i < $roles->num_rows; $i++){
            $role = $roles->fetch_assoc()?>
        <option value="<?=$role["id"]?>" <?=($role["id"] == (!empty($row) ? $row["role_id"] : 0)) ? "selected" : ""?>><?=$role["name"]?></option>
        <?php
        }?>
    </select>
    <input type="submit">
</form>