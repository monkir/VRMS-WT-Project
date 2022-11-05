<?php
    
    require_once 'header.php';
    //checking cookie
    if(isset($_COOKIE['status']))
    {
        //header("location: homepage.php?err=already_loggedin");
        if(isset($_GET['tripid']))
        {
            echo "Trip id is: ".$_GET['tripid']."<br>";
        }
        else
        {
            header("location: ../homepage.php?err=bad_request");
        }
    }
    //checking sessoin
    else if(isset($_SESSION['status']))
    {
        if(isset($_GET['tripid']))
        {
            echo "Trip id is: ".$_GET['tripid']."<br>";
        }
        else
        {
            header("location: ../homepage.php?err=bad_request");
        }
    }
    else
    {
        header("location: ../login.php?request=login");
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
</body>
</html>