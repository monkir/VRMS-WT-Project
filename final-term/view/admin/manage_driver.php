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
<body onload="searchDriver('')">
    <?php
    include_once '../header.php'; 
    include_once 'admin_header.php'; 
    echo "<h1>".$usertype."</h1>";
    ?>
    <p id="message"></p>
    <input type="text" onkeyup="searchDriver(this.value)" id="search-box">
    <button onclick="addDriver()">Add Driver</button>
    <div style="align-content: center;" id="driver-list">
        <!-- User list will be append here -->
    </div>
    <!-- Modal for Delete -->
    <div class="modal" id="delete-modal">
        <center>
            <div class="modal-content">
                <img src="" height="200px" alt="" id="delete-userimg">
                <p id="deletepara">
                    Are you sure to delete?
                </p>
                <button onclick="confirmDelete()"> Confirm </button>
                <button onclick="cancelDelete()"> No</button>
            </div>
    </center>
    </div>
    <!-- Modal for Block -->
    <div class="modal" id="block-modal">
        <center>
            <div class="modal-content">
                <img src="" height="200px" alt="" id="block-userimg">
                <p id="block-para">
                    Are you sure to block?
                </p>
                <button onclick="confirmBlock()"> Confirm </button>
                <button onclick="cancelBlock()"> No</button>
            </div>
    </center>
    </div>
    <!-- Modal for UnBlock -->
    <div class="modal" id="unblock-modal">
        <center>
            <div class="modal-content">
                <img src="" height="200px" alt="" id="unblock-userimg">
                <p id="unblock-para">
                    Are you sure to unblock?
                </p>
                <button onclick="confirmUnblock()"> Confirm </button>
                <button  onclick="cancelUnblock()"> No</button>
            </div>
    </center>
    </div>
    <!-- Modal for UnBlock -->
    <!-- Modal for Add New Driver -->
    <div class="modal" id="addDriver-modal">
        <center>
            <div class="modal-content">
                <form action="" onsubmit="return validateAddDriver()">
                    <legend>
                        <legend>
                            Name<input type="text" name="dname" id="dname"><br>
                            <input type="text" name="demail" id="demail" value=""><br>
                            <input type="text" name="dcontact" id="dcontact" value=""><br>
                            <input type="text" name="address" id="daddress" value=""><br>
                        </legend>
                        <legend>
                            <input type="text" name="did" id="did" value=""><br>
                        </legend>
                        <legend>
                            Enter passwrod: <input type="password" name="dpassword" id="dpassword" value=""><br>
                            Confirm Password: <input type="password" name="cdpassword" id="cdpassword" value=""><br>
                            
                        </legend>
                        <button type="submit">Submit</button>
                    </legend>
                </form>
                <button onclick="confirmAddDriver()"> Confirm </button>
                <button  onclick="cancelAddDriver()"> No</button>
            </div>
    </center>
    </div>
        <!-- Modal for UnBlock -->

    <?php
        require_once '../footer.php';
    ?>
</body>
</html>
<script src="mng_driver_script.js"></script>