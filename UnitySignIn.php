<?php

$unityUsername = $_POST['username'];
$unityPassword = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    echo "Connect failed: %s\n".mysqli_connect_errno();
    exit();
}

$query = "select * from player where username = '".$unityUsername."' and password = '".$unityPassword."'";
$result = mysqli_query($con, $query);

if ($result->num_rows == 0){
    echo "Username and password do not match.";
} else {
    echo "Success";
    $userID = $row['id'];   
}

if(!empty($userID)){
        header("Location: ProfilePage.php?user=$userID");
        exit();
    }
?>