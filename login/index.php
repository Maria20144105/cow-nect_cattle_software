<?php
session_start();
    $_SESSION;



    include("connection.php");
    include("functions.php");

    $user_data = check_login($con); // checks if the user is logged in

?>
<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
</head>
    <body>  
        <a href="logout.php">Logout</a>
            <h1>This is the index page</h1>
            <br>
            Hello, <?php echo $user_data['user_name']; ?>


    </body>
</html>