<?php

$unityEnteredScore = $_POST['score'];


$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

// Adding the sent in data from Unity to Database
$sql = "INSERT INTO playerinfo (score) VALUES ('".$unityEnteredScore."');";
$rs = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Game Info</title>
</head>
<body>
    <h1>Game Data</h1>
    <h5>Display score here</h5>
</body>
</html>