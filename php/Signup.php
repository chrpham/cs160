<?php
require "Config.php";

$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];
$user_email = $_POST['user_email'];
$datetime = date('YmdHis');

$sql_insert_logins = "INSERT INTO `logins`(`login_user_id`, `login_user_password`) VALUES ('" . $user_id . "','" . $user_password . "')";
$sql_insert_users = "INSERT INTO `users`(`user_id`, `user_email`, `user_create_stmp`) VALUES ('" . $user_id . "','" . $user_email . "','" . $datetime . "')";

if(!mysql_query($sql_insert_logins, $conn)){
    echo "Error: " . mysql_error($conn);
}
else{
    if(!mysql_query($sql_insert_users, $conn)){
        echo "Error: " . mysql_error($conn);
    }
    else{
        // change to user dashboard when it's done
        header("Location: ../php/Testserver.php");
    }
}

mysql_close($conn);
?>
