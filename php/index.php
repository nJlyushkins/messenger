<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        echo "index";
    }else{
        echo "login";
    }
?>