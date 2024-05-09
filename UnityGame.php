<?php

$unityEnteredScore = $_POST['score'];
$unityUsername = $_POST['username'];


//$unityPlayerID = $_POST['id'];

$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

$query = "select * from player where username = '".$unityUsername."'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)){
    $unityPlayerID = $row['id'];
};

// Adding the sent in data from Unity to Database
$sql = "Update playerinfo set score='".$unityEnteredScore."' where id = '".$unityPlayerID."';";
$rs = mysqli_query($con, $sql);

?>