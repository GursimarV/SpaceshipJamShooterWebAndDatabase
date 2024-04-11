<?php
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">

        <title>
            SpaceShip Jam Shooter Login Page
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
        <main>
            <div class="container">
                <h1>
                    Logging In
                </h1>

                <div class="index-container">
                    <label for="username">
                        <img src="pictures/UsernameSpacePixel.PNG" alt="Username"/>
                    </label>
                    
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                </div>

                <div class="index-container">
                    <label for="userpassword">
                        <img src="pictures/PasswordSpacePixel.PNG" alt="Password"/>
                    </label>
                    
                    <input type="text" id="userpassword" name="userpassword" placeholder="Enter Password">
                </div>

                <button type="submit">
                    <a href="LoginPage.php">
                        <img src="pictures/LoginSpaceButton.PNG" alt="LoginButton"/>
                    </a>
                </button>

                <button type="submit">
                    <a href="index.php">
                        <img src="pictures/GoBackButton.PNG" alt="BackButton"/>
                    </a>
                </button>
            </div>
        </main>
    </body>
</html>