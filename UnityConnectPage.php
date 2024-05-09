<!-- This is a Dummy PHP Page -->
<!-- This is used to test out uploading data from Unity to PHP files and uploading that data to Database -->

<?php

//Variables sent from Unity
$unityEnteredUserName = $_POST['username'];
$unityEnteredUserPassword = $_POST['userpassword'];

$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

// Adding the sent in data from Unity to Database
$sql = "INSERT INTO player (username, password) VALUES ('".$unityEnteredUserName."', '".$unityEnteredUserPassword."');";
$rs = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a Dummy PHP Page</h1>
    <h1>This is used to test out uploading data from Unity to PHP files and uploading that data to Database</h1>
</body>
</html>