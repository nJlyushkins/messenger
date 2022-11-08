<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']} OR outgoing_msg_id = {$row['unique_id']}) 
                AND (incoming_msg_id = {$outgoing_id} OR outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        }else{
            $result = "Нет сообщений";
        }

        (strlen($result)>48)?$msg=substr($result,0,48).'...' : $msg=$result;
        (!$row['status']) ? $offline = "offline" : $offline = "";

        $output .= '<a href="user.php?user_id='.$row['unique_id'].'">
                        <img src="php/img/'. $row['img']. '" alt="Упс..." class="avatar">
                        <div class="details">
                            <span>'. $row['fname'] . " ". $row['lname'] .'<div class="status-dot '.$offline.'"><i class="fa fa-circle"></i></div></span>
                            <p>'.$msg.'</p>
                        </div>
                    </a>';
    }
?>