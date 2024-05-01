<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $friendID = $_POST["target_id"];
    $currentID = $_SESSION["id"];

    header("Location: ../ProfilePage.php");
}
else
{
    header("Location: ../ProfilePage.php");
}
