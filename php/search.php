<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $seachTerm = mysqli_real_escape_string($conn,$_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE fname LIKE '%{$seachTerm}%' OR lname LIKE '%{$seachTerm}%'");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "Таких пользователей нет!";
    }

    echo $output;
?>