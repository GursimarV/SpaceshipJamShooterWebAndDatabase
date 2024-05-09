<?php

$unityEnteredScore = $_POST['score'];
$unityPlayerID = $_POST['id'];

$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

// Adding the sent in data from Unity to Database
$sql = "INSERT INTO playerinfo (id, score) VALUES ('".$unityPlayerID."', '".$unityEnteredScore."');";
$rs = mysqli_query($con, $sql);

?>