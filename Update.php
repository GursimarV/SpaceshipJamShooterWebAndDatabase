<?php

$con = mysqli_connect('localhost', 'root', '', 'test');

if (mysqli_connect_errno()){
    printf("Connect falied: %s\n", mysqli_connect_errno());
    exit();
}

$userID = $_REQUEST['user'];

if(isset($_REQUEST["username"], $_REQUEST["userpassword"])){
    $username = $_REQUEST['username'];
    $userpassword = $_REQUEST['userpassword'];

    $sql = "UPDATE player SET username = '".$username."', password = '".$userpassword."' WHERE player.id = '".$userID."';";
    $rs = mysqli_query($con, $sql);

    if(!empty($userID)){
        header("Location: ProfilePage.php?user=$userID");
        exit();
    }
}

?>