<?php

use LDAP\Result;
//start session
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$usertype="";
//checking usertype
if(isset($_COOKIE['usertype']))
{
    $usertype=$_COOKIE['usertype'];
}
else if(isset($_SESSION['usertype']))
{
    $usertype=$_SESSION['usertype'];
}
if($usertype != "admin")
{
    header("location: ../homepage.php?err=bad_request");
}
$root="../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="adminstyle.css">
    <title>Document</title>
</head>
<body onload="searchpassenger('')">
    <?php
    include_once '../header.php'; 
    echo "<h1>".$usertype."</h1>";
    ?>
    <input type="text" onkeyup="searchpassenger(this.value)">
    <div style="align-content: center;" id="userslist">
        
    </div>
    <button id="delete-btn">Button</button>
    <div class="delete-modal" id="delete-modal">
        <center>
            <div class="delete-modal-content">
                <img src="" height="200px" alt="" id="deleteuserimg">
                <p id="deletepara">
                    Are you sure to delete?
                </p>
                <button class="close"> Yes </button>
                <button> No</button>
            </div>
        </center>
        
    </div>
    <?php
        require_once '../footer.php';
    ?>
</body>
</html>
<script src="admin_script.js"></script>