<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Welcome to <?//$_POST["login"]?>;</h2>
        <a href="login.php">Log In</a> <br/>
        <a href="logout.php">Logout</a>
</body>
</html> -->

<?php
    error_reporting(E_ERROR | E_PARSE);
    $host = "localhost";
    $user = "root";
    $pass = "198923233171";
    $db = "cafe_old";
    try{
        $connect = new Mysqli();
        $connect->connect($host,$user,$pass,$db);
        $result = $connect->query("select p.product_id, p.name as pName, m.name as mName,p.price from products p inner join measurement m on m.measure_id = p. measure_id");
                // echo "<pre>";
                // print_r($result->num_rows);
                // echo "</pre>";?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>measure</th>
                    </tr>
            <?php for($i = 0; $i < $result->num_rows; $i++){
                
                $res = $result->fetch_assoc();
                ?>
                    <tr>
                        <th><?=$res['product_id']?></th>
                        <th><?=$res['pName']?></th>
                        <th><?=$res['price']?></th>
                        <th><?=$res['mName']?></th>
                        <th><a href="./update.php?id=<?=$res['product_id']?>">update</a></th>
                    </tr>
                <?php
            }?> 
            </table><?php

    }
    catch(Exception $e){
        var_dump($e->getMessage());
    }












?>