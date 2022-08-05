<?php

    if(!empty($_POST)){
        echo "do some logic ";
        print_r($_POST);
        print_r($_GET);
    }
    else{
        ?>  
        <form action="" method="post">
            <input type="text" name="name">
            <button type="submit"> save</button>
        </form>
        <?php echo "show form fields";
    }
?>