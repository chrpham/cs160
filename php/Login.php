<?php
require "Config.php";

$login_user_id = $_POST['login_user_id'];
$login_user_password = $_POST['login_user_password'];

$sql = "select * from logins where logins.login_user_id = '" . $login_user_id . "'";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    $data[] = $row;
}

if(empty($data)){
    echo "error_user_id";
}
else{
    if($data[0][1] != $login_user_password){
        echo "error_password";
    }
    else{
        echo $login_user_id;
    }
}
mysqli_close($conn);
?>
