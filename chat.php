<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
?>

<?php include_once "php/header.php" ?>
    <body>
        <div class="wrapper">
            <div class="content">
                <?php 
                    include_once "php/config.php";
                    $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="sidebar">
                    <h2> Ez Chat</h2>
                    <div class="prof-info">
                        <img class="avatar" src=<?php echo "php/img/" . $row['img']?> alt="Упс..">
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        </div>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-house"></i>Главная</a></li>
                        <li><a href="#"><i class="fa fa-user-group"></i>Друзья</a></li>
                        <li><a href="#"><i class="fa fa-comment"></i>Чаты</a></li>
                        <li><a href="#"><i class="fa fa-gamepad"></i>Игры</a></li>
                        <li><a href="#"><i class="fa fa-gear"></i>Настройки</a></li>
                        <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>"><i class="fa fa-right-from-bracket"></i>Выход</a></li>
                    </ul>
                </div>
                <div class="main-content">
                    <div class="users-panel">
                        <div class="search-bar">
                            <div class="field input">
                                <input type="text" placeholder="Поиск пользователя..">
                            </div>
                            <div class="field button">
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="users-list">

                        </div>
                    </div>
                    <div class="chat-box">
                        <?php
                            if(key_exists('user_id',$_GET)){
                                $user_id = mysqli_real_escape_string($conn,$_GET['user_id']);
                            }
                            else{
                                $user_id = $_SESSION['unique_id'];
                            }
                            $sql1 = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$user_id}");
                            if(mysqli_num_rows($sql1) > 0){
                                $row1 = mysqli_fetch_assoc($sql1);
                            }
                        ?>
                        <div class="user">
                            <img class="avatar" src=<?php echo "php/img/" . $row1['img']?> alt="Упс..">
                            <div class="details">
                                <span><?php echo $row1['fname'] . " " . $row1['lname'] ?></span>
                                <p><?php if($row1['status']){echo 'В сети';}else{echo 'Не в сети';} ?></p>
                            </div>
                        </div>
                        <div class="messenger">
                            <div class="messages">
                            </div>
                            <form action="#" class="sender" autocomplete="off">
                                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'];?>" hidden>
                                <input type="text" name="user_id" value="<?php echo $user_id;?>" hidden>
                                <input class="input-field" type="text" name="message" placeholder="Текст сообщения">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/chat.js"></script>
    </body>
</html>