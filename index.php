<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);



?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    </head>
<body>
    <style>
        .par
        {
       color:Orange;     
            
        }
    </style>
    <a href="logout.php">Log out</a>
    <h1>This is main page</h1>
    
    <br>
    Hello, <?php echo $user_data['user_name'];?>
   <br>
    <br>
<a href="names.php">See all users!</a>



    </body>
</html>