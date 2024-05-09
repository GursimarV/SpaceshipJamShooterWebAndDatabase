<?php

$con = mysqli_connect('localhost', 'root', '', 'test');

if (mysqli_connect_errno()){
    printf("Connect falied: %s\n", mysqli_connect_errno());
    exit();
}

$userID = $_REQUEST['user'];

$query = "select username from player where id = '".$userID."'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($result)){
    $username = $row['username'];
} 

$q = "select * from playerinfo where id = '".$userID."'";
$r = mysqli_query($con, $q);

while($row = mysqli_fetch_assoc($r)){
    $score = $row['score'];
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">

        <title>
            <?php echo $username;?>&apos;s Page
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

           h1, h2
           {
                margin: 5% 0;
                font-family: "VT323", monospace;
                font-weight: 400;
                font-style: normal;
                font-size: 75px;
                color:white;
            }

            p 
            {
                font-style: normal;
                font-size: 50px;
                color:white;
            }

            button
            {
                font-size: 25px;
                background-color: black;
                color: white;
                border: 2px solid blue;
                border-radius: 15%;
            }

            a {
                text-decoration: none;
                color: white;
            }   
            
            table, th, td
            {
                border: 3px solid white;
                width: 50%;
                color: white;
            }
        </style>

    </head>
    <body>
        <main>
            <div class="container">
                <button type="submit">
                    <a href="index.php">
                        <!--img src="pictures/GoBackButton.PNG" alt="BackButton"/-->
                        Sign Out
                    </a>
                </button>
                <button type="submit">
                    <a href="EditPage.php?user=<?php echo $userID;?>">
                        <!--img src="pictures/GoBackButton.PNG" alt="BackButton"/-->
                        Edit Profile
                    </a>
                </button>

                <h1>
                <?php echo $username;?>&apos;s Page
                </h1>

                <div id="score">
                    <h2>Score</h2>
                    <p>
                    <?php echo $score;?>
                    </p>
                </div>  

                <div id="friends">
                    <h2>Friends</h2>
                    <table>
                        <tr>
                            <th>Username</th>
                            <th>Score</th>
                        </tr>
                        <?php 
                            $friendList = "select * from friendinfo where id = '".$userID."'";
                            $r = mysqli_query($con, $friendList);

                            while($row = mysqli_fetch_assoc($r)){
                                $friendID = $row['friend_id'];
                                echo "<tr>";
                                $x = "select * from player where id = '".$friendID."'";
                                $t = mysqli_query($con, $x);
                                while($row = mysqli_fetch_assoc($t)){
                                    $friendUsername = $row['username'];
                                    echo "<td>$friendUsername</td>";
                                }
                                $x = "select * from playerinfo where id = '".$friendID."'";
                                $t = mysqli_query($con, $x);
                                while($row = mysqli_fetch_assoc($t)){
                                    $friendScore = $row['score'];
                                    echo "<td>$friendScore</td>";
                                }
                                echo "</tr>";
                            }
                        ?>
                    </table>
                    <form action="AddFriend.php">
                        <input type="hidden" name="user" value="<?php echo $userID;?>">
                        <label for="friendUsername">
                            <img src="pictures/UsernameSpacePixel.png" alt="Username">
                        </label>
                        <input type="text" id="friendUsername" name="friendUsername" placeholder="Enter A Friend's Username">
                        <button type="submit">
                            <p>Add Friend</p>
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>