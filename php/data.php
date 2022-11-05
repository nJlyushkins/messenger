<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="user.php?user_id='.$row['unique_id'].'">
                        <img src="php/img/'. $row['img']. '" alt="Упс..." class="avatar">
                        <div class="details">
                            <span>'. $row['fname'] . " ". $row['lname'] .'<div class="status-dot"><i class="fa fa-circle"></i></div></span>
                            <p>Привет!</p>
                        </div>
                    </a>';
    }
?>