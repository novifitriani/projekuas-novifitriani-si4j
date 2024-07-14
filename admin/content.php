<?php
    if(isset($_GET['page'])){
        if(empty($_GET['page']))
        {
            include "dashboard.php";
        }else {
            $page= $_GET['page'];
            $file=$page.".php";
            if(file_exists($file)){
                include $file;
            }else{
                
            }
        }
    }
    else{
        include "dashboard.php";
    }
?>