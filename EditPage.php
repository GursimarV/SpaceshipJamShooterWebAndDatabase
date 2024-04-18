<?php

$con = mysqli_connect('localhost', 'root', '', 'test');

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}

$userID = $_REQUEST['user'];

$query = "select username from player where id = '".$userID."'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($result)){
   $username = $row['username'];   
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">

        <title>
            Edit Page
        </title>

        <link rel="stylesheet" href="css/style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <style>
           body
           {
            background-image: url('pictures/PixelSpace.jpeg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
           }
           h1
            {
                margin: 5% 0;
                font-family: "VT323", monospace;
                font-weight: 400;
                font-style: normal;
                font-size: 75px;
                color:white;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <h1>
                Editing <?php echo $username;?>&apos;s Page
            </h1>

            <form action="Update.php">
                <input type="hidden" name="user" value="<?php echo $userID;?>">
                <label for="username">
                    <img src="pictures/UsernameSpacePixel.png" alt="Username">
                </label>
                    <input type="text" id="username" name="username" placeholder="Enter A New Username">

                <br>

                <label for="userpassword">
                    <img src="pictures/PasswordSpacePixel.png" alt="Password">
                </label>
                <input type="text" id="userpassword" name="userpassword" placeholder="Enter A New Password">

                <button type="submit">
                    <p>Save</p>
                </button> 
            </form>

            <br>

            <button type="submit">
                    <a href="ProfilePage.php?user=<?php echo $userID;?>">
                        <img src="pictures/GoBackButton.PNG" alt="BackButton"/>
                    </a>
                </button>
        </div>
    </body>
</html>