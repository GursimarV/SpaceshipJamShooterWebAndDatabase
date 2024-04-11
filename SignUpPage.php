<?php
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">

        <title>
            SpaceShip Jam Shooter SignUp Page
        </title>

        <link rel="stylesheet" href="css/style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <style>
           body
           {
            background-image: url('pictures/PixelSpace.jpeg');

            height: 100%; 

            background-position: center;

            background-repeat: no-repeat;
            
            background-size: cover;
           }
        </style>

    </head>

    <body>
        <div class="container">
            <h1>
                Welcome to the sign up page!
            </h1>
            
            <br>
            
            <h1>
                Sign up here to become one of the street people!
            </h1>

            <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter A Username">

            <br>

            <label for="userpassword">Password:</label>
            <input type="text" id="userpassword" name="userpassword" placeholder="Enter A Password">

            <button type="submit">
                    <a href="SignUpPage.php">

                        <img src="pictures/SignUpSpaceButton.PNG" alt="SignUpButton"/>
                    </a>
            </button> 

            <br>

            <button type="submit">
                    <a href="index.php">
                        <img src="pictures/GoBackButton.PNG" alt="BackButton"/>
                    </a>
                </button>
        </div>
    </body>
</html>