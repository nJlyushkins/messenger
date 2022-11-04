<?php
    $conn = mysqli_connect("localhost","root","","chat");
    if(!$conn){
        echo "DB connected" . mysqli_connect_error();
    }
?>