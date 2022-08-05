<?php
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";
    $connect = new mysqli($host,$user,$pass,$db);
    ?>

    <a href="/users/form.php">Create</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Login</th>
            <th>Birthday</th>
            <th>Role</th>
            <th></th>
        </tr>
    <?php
    if($connect){
       $res = $connect->query("select u.id, u.name as uName, u.login, u.birth, r.name as rName  from users u inner join role r on r.id = u.role_id order by u.id");
        
       for ($i=0; $i < $res->num_rows; $i++) { 
            $row = $res->fetch_assoc();
            ?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["uName"]?></td>
                <td><?=$row["login"]?></td>
                <td><?=$row["birth"]?></td>
                <td><?=$row["rName"]?></td>
                <td>
                    <a href="/users/form.php?id=<?=$row["id"]?>">Update</a>
                    <a href="/users/delete.php?id=<?=$row["id"]?>">Delete</a>
                </td>
            </tr>
       <?php
       }
    }
    else{
        echo "bad information";
    }
    ?>
    </table>

