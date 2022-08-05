<?php
    $host = "192.168.1.205";
    $user = "root";
    $pass = "198923233171";
    $db = "practice";
    $connect = new mysqli($host,$user,$pass,$db);
    ?>

    <a href="/role/form.php">Create</a>
    <table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
        </tr>
    <?php
    if($connect){
       $res = $connect->query("select * from role");
        
       for ($i=0; $i < $res->num_rows; $i++) { 
            $row = $res->fetch_assoc();
            ?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["name"]?></td>
                <td>
                    <a href="/role/form.php?id=<?=$row["id"]?>">Update</a>
                    <a href="/role/delete.php?id=<?=$row["id"]?>">Delete</a>
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

