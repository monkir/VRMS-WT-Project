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
include_once '../../model/admin_model.php';
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
<body>
    <?php
    include_once '../header.php'; 
    echo "<h1>".$usertype."</h1>";
    ?>
    <div style="align-content: center;">
        <?php 
        $result= showPassengerList();
        if($result->num_rows==0)
        {
            echo "No Results Founded";
        }
        else
        {
            ?>
            <table>
                <tr>
                    <th>Userid</th>
                    <th>Usertype</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php
                while($row = $result->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['usertype']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td style="width: 200px;"><?php echo $row['adress']; ?></td>
                        <td>
                            <img src="../profile_image/<?php echo $row['profile_image']; ?>" alt="" height="50px">
                        </td>
                        <td>
                            <button onclick="deletePassenger('<?php echo $row['userid']; ?>', '<?php echo $row['profile_image']; ?>')">Delete</a>
                            <button onclick="blockPassenger()">Block</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
        ?>
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