<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_SESSION["id"]))
    {
        $currentID = $_SESSION["id"];

        try
        {

        }
        catch(PDOException $e)
        {

        }
        finally
        {
            
        }

        session_abort();
        header("Location: ../ProfilePage.php");
    }
    else
    {
        header("Location: ../ProfilePage.php");
    }
}
else
{
    header("Location: ../ProfilePage.php");
}
?>