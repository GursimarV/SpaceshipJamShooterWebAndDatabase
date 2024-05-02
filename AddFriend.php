<?php

$con = mysqli_connect('localhost', 'root', '', 'test');

if (mysqli_connect_errno()){
    printf("Connect falied: %s\n", mysqli_connect_errno());
    exit();
}

$user1 = $_REQUEST['user'];

if(isset($_REQUEST["friendUsername"])){
    $username = $_REQUEST['friendUsername'];

    $query = "SELECT id from player where username = '".$username."';";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)){
        $user2 = $row['id'];
    }

    $query1 = "INSERT into friendinfo (id, friend_id) values ('".$user1."', '".$user2."');";
    $query2 = "INSERT into friendinfo (id, friend_id) values ('".$user2."', '".$user1."');";
    
    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);

    if(!empty($user1)){
        header("Location: ProfilePage.php?user=$user1");
        exit();
    }
}

?>