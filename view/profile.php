<?php
    //checking cookie
    //session_start();
    require_once "header.php";
    if(isset($_COOKIE['status']))
    {
        //header("location: homepage.php?err=already_loggedin");
        //echo "hi";
    }
    //checking sessoin
    else if(isset($_SESSION['status']))
    {
        //echo "hi";
    }
    else
    {
        header("location: ../homepage.php?err=bad_request");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
            <a href="">See profile</a>|
            <a href="">Trip History</a>|
            <a href="">Change Profile</a>|
            <a href="">Change Password</a>
    </center>
</body>
</html>