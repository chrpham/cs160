<?php
require "Config.php";

$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];
$user_email = $_POST['user_email'];
$datetime = date('YmdHis');

$sql_insert_logins = "INSERT INTO `logins`(`login_user_id`, `login_user_password`) VALUES ('" . $user_id . "','" . $user_password . "')";
$sql_insert_users = "INSERT INTO `users`(`user_id`, `user_email`, `user_create_stmp`) VALUES ('" . $user_id . "','" . $user_email . "','" . $datetime . "')";

if(!mysqli_query($conn, $sql_insert_logins)){
    echo "error";
}
else{
    if(!mysqli_query($conn, $sql_insert_users)){
        echo "error";
    }
    else{
        echo $user_id;
    }
}

mysqli_close($conn);
?>
