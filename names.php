<?php
session_start();
include("connection.php");
include("functions.php");
?>
<html>
<head>
    <link rel="stylesheet" href="Css/Names.css">
    </head>
    <body>
    <div>
        <?php
    $sql = "SELECT id, user_name, password FROM users";
$result = $con->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    echo "<p> Username: ".$row['user_name']."<br> Password: " .$row['password']."</p>";
    }
    ?>
        </div>
    </body>
</html>

