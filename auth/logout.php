<?php

    setcookie("name","",time()-1,"/");
    setcookie("role","",time()-1,"/");
    header("Location: /");

?>