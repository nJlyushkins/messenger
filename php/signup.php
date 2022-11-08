<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pswrd = mysqli_real_escape_string($conn,$_POST['pswrd']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pswrd)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email already signed up!";
            }
            else{
                if(mb_strlen($fname) < 2 || mb_strlen($fname) > 25){
                    echo 'Недопустимая длина имени!';
                    exit();
                }
                elseif(mb_strlen($lname) < 2 || mb_strlen($lname) > 25){
                    echo 'Недопустимая длина фамилии!';
                    exit();
                }
                elseif(mb_strlen($pswrd) < 2 || mb_strlen($pswrd) > 25){
                    echo 'Недопустимая длина пароля!';
                    exit();
                }
                elseif(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png','jpg','jpeg'];
                    if(in_array($img_ext,$extensions) === true){
                        $time = time();
                        (strlen($img_name)>48)?$img_name_s=substr($img_name,0,48) : $img_name_s=$img_name;
                        $new_img_name = $time.$img_name_s;
                        
                        if(move_uploaded_file($tmp_name, "img/".$new_img_name)){
                            $status = 1;
                            $random_id = rand(time(),10000000);

                            //Я ЗАЕБАЛСЯ БЛЯТЬ ПОМОГИТЕ!!!
                            $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id,fname,lname,email,pswrd,img,status) VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$pswrd}','{$new_img_name}',{$status})");
                            if($sql2){
                                $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3)>0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";
                                }
                            }else{
                                echo "Smthg went wrong!";
                            }
                        }
                    }else{
                        echo "Please select an Image with .jpeg, .jpg, .png";
                    }
                }else{
                    echo "Please select an Image file!";
                }
            }
        }else{
            echo "$email isn't valid!";
        }
    }else{
        echo "All input field are required!";
    }
?>