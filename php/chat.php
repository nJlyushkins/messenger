<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql1 = "SELECT * FROM messages WHERE (outgoing_msg_id = {$_SESSION['unique_id']} OR incoming_msg_id={$_SESSION['unique_id']})";
    $query = mysqli_query($conn,$sql1);
    $friends = array();
    $output = "";
    if(mysqli_num_rows($query) > 0){
        while($row1 = mysqli_fetch_assoc($query)){
            if($row1['outgoing_msg_id'] != $_SESSION['unique_id']){
                if(!in_array($row1['outgoing_msg_id'],$friends,true)){
                    array_push($friends,$row1['outgoing_msg_id']);
                }
            }else{
                if(!in_array($row1['incoming_msg_id'],$friends,true)){
                    array_push($friends,$row1['incoming_msg_id']);
                }
            }
        }
        $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id IN (". implode(',',$friends) .")");
        include "data.php";
    }else{
        $output .= "Вы ещё ни с кем не общались";
    }
    echo $output;
?>